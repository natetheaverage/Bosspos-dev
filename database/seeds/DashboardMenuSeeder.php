<?php 

    /*
    * DashboardMenu.php for bosspos1.5
    * By: natetheaverage
    * created: 5/1/15
    */

use App\ObjectClasses;
use App\InterfaceObject;
use Illuminate\Database\Seeder;

class DashboardMenuSeeder extends Seeder {

	public function run()
	{
		$i = 1;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'Inventory',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-barcode',                    // icon from fa-
			'href'               => '/inventory',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'Customers',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-users',                    // icon from fa-
			'href'               => '/customer',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'Dailies',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-bar-chart',                    // icon from fa-
			'href'               => '/daily',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'Employees',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-users',                    // icon from fa-
			'href'               => '/employee',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'POS',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-dollar',                    // icon from fa-
			'href'               => '/pos',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'Facilities',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-building',                    // icon from fa-
			'href'               => '/facility',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;
		$Objects = InterfaceObject::create([
			'menu_id'            => '0',                 //id for The Menu this belongs to
			'menu_name'          => 'DashboardMenu',               //-- its name
			'menu_order'         => $i,              //-- where in the order doest this belong
			'family'             => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'               => 'largeButton',         // Type of object in the family
			'class'              => 'btn btn-active-success btn-default btn-dashboard',    // Class of the object
			'label'              => 'Promotions',           // header / Label displayed
			'value'              => '',                   // Value can be different for each (eg checked, string = "JoeBlow"
			'content'            => '',                 // Body message
			'icon'               => 'fa-umbrella',                    // icon from fa-
			'href'               => '/promotion',          // target for links
			'disabled'           => null,              // is this disabled?
			'owner_id'           => 1,                 // id if this object requires an owner
			'owner_type'         => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$this->addClassesToPivotTable($i);
		$i++;

	}

	/**
	 * @param $i
	 */
	private function addClassesToPivotTable($i)
	{
		ObjectClasses::create([
			'object_id'   => $i,
			'object_type' => 'App\InterfaceObject',
			'class_id'    => 19,
			'user_id'     => 1
		]);
		ObjectClasses::create([
			'object_id'   => $i,
			'object_type' => 'App\InterfaceObject',
			'class_id'    => 22,
			'user_id'     => 1
		]);
		ObjectClasses::create([
			'object_id'   => $i,
			'object_type' => 'App\InterfaceObject',
			'class_id'    => 655,
			'user_id'     => 1
		]);
		ObjectClasses::create([
			'object_id'   => $i,
			'object_type' => 'App\InterfaceObject',
			'class_id'    => 666,
			'user_id'     => 1
		]);
	}
}