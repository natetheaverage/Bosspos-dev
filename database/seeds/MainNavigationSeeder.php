<?php 

use Boss\InterfaceObject;
use Illuminate\Database\Seeder;

class MainNavigationSeeder extends Seeder  {


	public function run()
	{
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 0,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Dashboard',           // header / Label displayed
			'icon'       => 'fa-dashboard',                    // icon from fa-
			'href'       => '#',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => 'hasSub',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 1,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Demo 1',           // header / Label displayed
			'icon'       => 'fa-codepen',                    // icon from fa-
			'href'       => '/demo1',          // target for links
			'extra1'     => 'openSub',                  // ???
			'extra2'     => '',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 2,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Sub Menu',           // header / Label displayed
			'icon'       => 'fa-align-right',                    // icon from fa-
			'href'       => '/dashboard',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => 'closeSub1',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 3,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Another Nav Button',           // header / Label displayed
			'icon'       => 'fa-align-center',                    // icon from fa-
			'href'       => '/dashboard',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => '',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 4,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'UI Components',           // header / Label displayed
			'icon'       => 'fa-diamond',                    // icon from fa-
			'href'       => '/dashboard',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => 'hasSub',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 5,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Buttons',           // header / Label displayed
			'icon'       => 'fa-neuter',                    // icon from fa-
			'href'       => '/ui/buttons',          // target for links
			'extra1'     => 'openSub',                  // ???
			'extra2'     => '',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 6,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Check Boxes',           // header / Label displayed
			'icon'       => 'fa-check',                    // icon from fa-
			'href'       => '/dashboard',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => 'closeSub1',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 7,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Employees',           // header / Label displayed
			'icon'       => 'fa-users',                    // icon from fa-
			'href'       => '#',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => 'hasSub',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 8,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'New Employee',           // header / Label displayed
			'icon'       => 'fa-user-plus',                    // icon from fa-
			'href'       => '/employee/create',          // target for links
			'extra1'     => 'openSub',                  // ???
			'extra2'     => '',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 9,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Employees',           // header / Label displayed
			'icon'       => 'fa-users',                    // icon from fa-
			'href'       => '/employee',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => 'closeSub1',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 10,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Another Button',           // header / Label displayed
			'icon'       => 'fa-tree',                    // icon from fa-
			'href'       => '#',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => '',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
		$Objects = InterfaceObject::create([
			'menu_id'    => '1',                 //id for The Menu this belongs to
			'menu_name'  => 'MainNavigation',               //-- its name
			'menu_order' => 11,              //-- where in the order doest this belong
			'family'     => 'button',                  // The family the object belongs to (box, form, button etc...
			'type'       => 'navigation',         // Type of object in the family
			'class'      => 'arrow',    // Class of the object
			'label'      => 'Something',           // header / Label displayed
			'icon'       => 'fa-target',                    // icon from fa-
			'href'       => '#',          // target for links
			'extra1'     => '',                  // ???
			'extra2'     => '',                  // ???
			'owner_id'   => 1,                 // id if this object requires an owner
			'owner_type' => 'Average',       //-- owner type ( this doesn't need to be a user)
		]);
	}
}