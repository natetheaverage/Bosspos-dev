<?php namespace App\Http\Controllers;

use Bosspos\Commanding\ValidationCommandBus;
use App\Commands\RegisterNewEmployeeCommand;
use App\Customer;
use Bosspos\Employees\Employee;
use App\Http\Requests;
use App\Services\WizardSteps;
use App\Membership;
use Bosspos\Employees\RemoveEmployeeCommand;
use Bosspos\Profiles\Profile;
use App\Repositories\NewUserFieldsRepo as UserFields;
use App\Repositories\Repo;
use App\Services\RegisterNewCustomer;
use Bosspos\Employees\EmployeeRegistrar;
use App\Services\Registrar;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Services\RegisterNewProfile;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller {

	protected $commandBus;

	public $fakeInfo;

	public $sections;

	public $fields;
	/**
	 * @var WizardSteps
	 */
	private $wizardSteps;

	use AuthenticatesAndRegistersUsers;

	public function __construct(ValidationCommandBus $commandBus, Registrar $registrar, WizardSteps $wizardSteps)
	{
		$this->middleware('auth');
		$this->middleware('repo.user');
		$this->registrar = $registrar;
		$this->commandBus = $commandBus;
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
		$stage = Session::pull('employee-registration-stage');
		$fields = $userFields->createFields('registrationFields');
		$fakeInfo = $fields->fetch('fakeInfo')->first();
		$sections = $fields->fetch('sectionCount')->first();
		$formUrl = 'employee';
		return view('new.employee', compact('fields', 'sections', 'fakeInfo', 'formUrl', 'stage'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegisterNewProfile $newProfile, EmployeeRegistrar $employee, RegisterNewCustomer $newCustomer, Request $input, Employee $employeeInput, User $userInput, Profile $profileInput, Customer $customerInput, Membership $memberInput )
	{
		$validator = $employee->validator($input->all());
		if ($validator->fails())
		{
			$this->throwValidationException($input, $validator);
		}
		$this->wizardSteps->update(4);



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
	 * List of all employees.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function all(User $users)
	{
		//$profilePic = 'img/users/'.studly_case($user->profile->last_name[0]).'/'.studly_case($user->profile->last_name).studly_case($user->profile->first_name).'/'.$user->profile->profile_picture;

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
