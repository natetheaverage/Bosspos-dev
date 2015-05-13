//<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Boss\Pos\Customers\Customer;
use Boss\Pos\Employees\Employee;
use Boss\Pos\Profiles\Profile;
use Boss\Pos\Users\User;
use Boss\InterfaceObject;
use Boss\Company;
use Boss\Facility;
use Boss\Mc;
use Boss\Mip;
use Boss\Opc;
use Boss\Lists;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        User::truncate();
		$this->call('UserSeeder');

        Profile::truncate();
		$this->call('ProfilesSeeder');

        Employee::truncate();
		$this->call('EmployeesSeeder');

        Customer::truncate();
		$this->call('CustomersSeeder');

        InterfaceObject::truncate();
		$this->call('DashboardMenuSeeder');
		$this->call('MainNavigationSeeder');
		$this->call('RegistrationFieldsListSeeder');
		$this->call('ProfileFieldsListSeeder');
		$this->call('EmployeeFieldsListSeeder');
		$this->call('CustomerFieldsListSeeder');

		Company::truncate();
		$this->call('CompaniesSeeder');

		Facility::truncate();
		Mc::truncate();
		Mip::truncate();
		Opc::truncate();
		$this->call('FacilitiesSeeder');

        Lists::truncate();
		$this->call('ListsSeeder');

        //Saved Seeder
        //$this->call('bossposTableSeeder');

		Model::reguard();

	}

}
