<?php namespace Boss\Http\Controllers;

use Boss\Http\Requests;
use Boss\Pos\Users\User;
use Boss\Repositories\WizardTabOrderRepo;
use Boss\Services\WizardValidations;
use Illuminate\Http\Request;
use Boss\Services\WizardSteps;
use Illuminate\Support\Facades\Response;
use Boss\Pos\Employees\EmployeeRegistrar;
use Boss\Repositories\NewUserFieldsRepo as UserFields;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class CustomerController extends Controller {

	private $wizardSteps;

	private $wizardTabOrder;

	private $wizardValidations;

	use AuthenticatesAndRegistersUsers;

	public function __construct(WizardSteps $wizardSteps, WizardTabOrderRepo $wizardTabOrder, WizardValidations $wizardValidations)
	{
		$this->middleware('auth');
		$this->middleware('repo.user');
		$this->wizardSteps = $wizardSteps;
		$this->wizardTabOrder = $wizardTabOrder;
		$this->wizardValidations = $wizardValidations;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(User $users)
	{
		$users = $users->with('employeeInfo')->get();
		return view('pages.employee.directory', compact('users', 'profilePic'));
	}

	/**
	 * Show the form for creating a new customer.
	 *
	 * @return Response
	 */
	public function create(UserFields $userFields)
	{
		// Grab any value from wizard steps and clear it out
		$stage = $this->wizardSteps->pull();

		$categories = $this->wizardTabOrder->create('customerWizardTabOrder');

		// get info to populate form and place it in the variables to be passed
		$fields = $userFields->createFields('registrationFields', $categories);
		$fakeInfo = $fields->fetch('fakeInfo')->first();
		$sections = $fields->fetch('sectionCount')->first();
		$formUrl = 'customer';

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
		$categories = $this->wizardTabOrder->create('customerWizardTabOrder');

		$validator = $this->wizardValidations->run($input->all(), $categories);

		if ($validator->fails())
		{
			$input->stage = $this->wizardSteps->get();
			$this->throwValidationException($input, $validator);
		}

		// TODO this is where I Have left off for the night 05/05/2015
		//$this->dispatch(new RegisterNewEmployeeCommand($input->all()));

		return view('/dashboard');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

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
	public function destroy($id)
	{
		//
	}

}
