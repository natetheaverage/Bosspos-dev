//<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

	protected $toTruncate = [
		'users',
		'profiles',
		'employees',
		'customers',
		'interface_objects',
		'companies',
		'facilities',
		'mcs',
		'mips',
		'opcs',
		'lists',
		'projects',
		'tasks',
		'conversations',
	];


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		foreach($this->toTruncate as $table){
			DB::table($table)->truncate();
		}

		$this->call('UserSeeder');

		$this->call('ProfilesSeeder');

		$this->call('EmployeesSeeder');

		$this->call('CustomersSeeder');
		$this->call('ConversationsSeeder');

		$this->call('DashboardMenuSeeder');
		$this->call('MainNavigationSeeder');
		$this->call('RegistrationFieldsListSeeder');
		$this->call('ProfileFieldsListSeeder');
		$this->call('EmployeeFieldsListSeeder');
		$this->call('CustomerFieldsListSeeder');
		$this->call('MessagesSeeder');

		$this->call('CompaniesSeeder');

		$this->call('FacilitiesSeeder');

		$this->call('ListsSeeder');
		$this->call('ProjectsSeeder');
		$this->call('TasksSeeder');


		Model::reguard();

	}

}
