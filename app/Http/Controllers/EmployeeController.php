<?php namespace Boss\Http\Controllers;

use Boss\Commands\RegisterNewEmployeeCommand;
use Boss\Http\Requests;
use Boss\Services\WizardSteps;
use Boss\Pos\Employees\RemoveEmployeeCommand;
use Boss\Repositories\NewUserFieldsRepo as UserFields;
use Boss\Repositories\Repo;
use Boss\Pos\Employees\EmployeeRegistrar;
use Boss\Services\Registrar;
use Boss\Pos\Users\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller {

	public $fakeInfo;

	public $sections;

	public $fields;

	private $wizardSteps;

	use AuthenticatesAndRegistersUsers;

	public function __construct(Registrar $registrar, WizardSteps $wizardSteps)
	{
		$this->middleware('auth');

		$this->middleware('repo.user');

		$this->registrar = $registrar;

		$this->wizardSteps = $wizardSteps;

	}


	/**
	 * Display a listing of the resource.
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

		$stage = $this->wizardSteps->pull();

		//dd($stage);

		$fields = $userFields->createFields('registrationFields');
		$fakeInfo = $fields->fetch('fakeInfo')->first();
		$sections = $fields->fetch('sectionCount')->first();

		// TODO Automate this list organiser
		$category = [
			1 => 'employee',
			2 => 'profile',
			3 => 'customer',
			4 => 'login'
		];
		// TODO Automate this icon placement
		$wizardIcons = [
			1 => 'fa-briefcase',
			2 => 'fa-user',
			3 => 'fa-dollar',
			4 => 'fa-desktop'
		];
		$formUrl = 'employee';
		return view('new.employee', compact('fields', 'sections', 'fakeInfo', 'formUrl', 'stage', 'category', 'wizardIcons'));
	}


	/**
	 * Validate Request -> Dispatch RegisterNewEmployeeCommand object
	 *
	 * @param EmployeeRegistrar $employee
	 * @param Request $input
	 * @return \Illuminate\View\View
	 */
	public function store(EmployeeRegistrar $employee, Request $input )
	{

		$validator = $employee->validator($input->all());

		if ($validator->fails())
		{
			$input->stage = $this->wizardSteps->get();

			$this->throwValidationException($input, $validator);
		}

		$this->wizardSteps->remove();


		$this->dispatch(new RegisterNewEmployeeCommand($input->all()));

		/*
		$registerArray = array_merge($input->all(),
			['created_by' => Session::get('user')->id, 'facility_id' => 1, 'preferences_id' => 1, 'role_id' => 1, 'user_id' => '',]);

		if( ! $database)
		{
			$validator = $this->registrar->validator($registerArray);
		} else {
			$validator = $database->validator($registerArray);
		}
		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		if( ! $database)
		{
			return $this->registrar->create($registerArray)->id;
		} else {
			return $database->create($registerArray);
		}
		if($input->stage <= 1)
		{
			Session::put('employee-registration-stage', 1);
			$user_id = $this->validateAndRegisterEmployee($input, $registerArray, false);
			$registerArray = array_merge($registerArray ,['user_id' => $user_id]);
			Session::put('employee-registration-stage', 2);
		};

		if($input->stage <= 2)
		{
			Session::put('employee-registration-stage', 2);
			$this->validateAndRegisterEmployee($input, $registerArray, $newProfile);
			Session::put('employee-registration-stage', 3);
		};

		if($input->stage <= 3)
		{
			Session::put('employee-registration-stage', 3);
			$this->validateAndRegisterEmployee($input, $registerArray, $newEmployee);
			Session::put('employee-registration-stage', 4);
		};

		if($input->stage <= 4)
		{
			Session::put('employee-registration-stage', 4);
			$this->validateAndRegisterEmployee($input, $registerArray, $newCustomer);
			Session::forget('employee-registration-stage');
		}

		/*
		$memberArray = array_merge($request->only(
			'promotion_approval', 'point_member_id'),
			['user_id' => $userID]);
		*/

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



	/**
	 * Run request through the validator for given database if passes than save
	 *
	 * @param $request
	 * @param $registerArray
	 * @param $database
	 * @return mixed
	 */
	public function validateAndRegisterEmployee($request, $registerArray, $database)
	{

	}



}
