<?php namespace Boss\Http\Controllers;

use Boss\Http\Requests;
use Boss\Pos\Users\User;
use Boss\Repositories\Repo;
use Illuminate\Http\Request;
use Boss\Services\WizardSteps;
use Boss\Services\WizardValidations;
use Illuminate\Support\Facades\Response;
use Boss\Repositories\WizardTabOrderRepo;
use Boss\Pos\Employees\EmployeeRegistrar;
use Boss\Commands\RegisterNewUserCommand;
use Boss\Commands\RegisterNewProfileCommand;
use Boss\Commands\RegisterNewEmployeeCommand;
use Boss\Commands\RegisterNewCustomerCommand;
use Boss\Pos\Employees\RemoveEmployeeCommand;
use Boss\Repositories\NewUserFieldsRepo as UserFields;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class EmployeeController extends Controller {

	public $fakeInfo;

	public $sections;

	public $fields;

	private $wizardSteps;

	private $wizardTabOrder;

	public $wizardValidations;

	use AuthenticatesAndRegistersUsers;

	public function __construct(WizardTabOrderRepo $wizardTabOrder, WizardSteps $wizardSteps, WizardValidations $wizardValidations)
	{
		$this->middleware('auth');
		$this->middleware('repo.user');
		$this->wizardSteps = $wizardSteps;
		$this->wizardTabOrder = $wizardTabOrder;
		$this->wizardValidations = $wizardValidations;
	}

	/**
	 * Display a listing of all employees.
	 *
	 * @returnResponse
	 */
	public function index(User $users)
	{
		$users = $users->with('employeeInfo')->get();
		return view('pages.employee.directory', compact('users', 'profilePic'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(UserFields $userFields)
	{
		// Grab any value from wizard steps and clear it out
		$stage = $this->wizardSteps->pull();

		// TODO switch this to redis
		$categories = $this->wizardTabOrder->create('employeeWizardTabOrder');

		// get info to populate form and place it in the variables to be passed
		$fields = $userFields->createFields('registrationFields', $categories);
		$fakeInfo = $fields->fetch('fakeInfo')->first();
		$sections = $fields->fetch('sectionCount')->first();
		$formUrl = 'employee';

		//dd($categories);
		return view('pages.register', compact('fields', 'sections', 'fakeInfo', 'formUrl', 'stage', 'categories'));
	}


	/**
	 * Validate Request -> Dispatch RegisterNewEmployeeCommand object
	 *
	 * @param EmployeeRegistrar $employee
	 * @param Request $input
	 * @return \Illuminate\View\View
	 */
	public function store(Request $input)
	{

		// Set categories
		$categories = $this->wizardTabOrder->create('employeeWizardTabOrder');

		$validator = $this->wizardValidations->run($input->all(), $categories);

		if ($validator->fails())
		{
			$input->stage = $this->wizardSteps->get();
			$this->throwValidationException($input, $validator);
		}


		$newUser = $this->dispatch(new RegisterNewUserCommand($input->all()));
		$this->dispatch(new RegisterNewEmployeeCommand($input->all(), $newUser));
		$this->dispatch(new RegisterNewProfileCommand($input->all(), $newUser));
		$this->dispatch(new RegisterNewCustomerCommand($input->all(), $newUser));

		return view('/dashboard');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($employeeId, Repo $repo)
	{

		$userProfile = $repo->find('userProfile', $employeeId);

		return view('pages.user.profile',  compact('userProfile'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($employeeId)
	{
		$command = new RemoveEmployeeCommand($employeeId);

		$this->commandBus->execute($command);

		return view('/dashboard');
	}







}
