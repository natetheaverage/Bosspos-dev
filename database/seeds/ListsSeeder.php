<?php

use Boss\Lists;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OptionListsSeeder
 */
class ListsSeeder extends Seeder {

	/**
	 * Run the database seeds
	 *
	 * @return void
	 */
	public function run()
	{

		Lists::truncate();

		// Multi select lists need to go first
		$this->bootstrapCssClasses();


		$this->statesList();
		$this->formFieldsList();
		$this->userTypeList();
		$this->identificationTypeList();
		$this->badgeTypeList();
		$this->jobTitleList();
        $this->entityTypeList();
        $this->facilityTypeList();
		$this->employeeWizardTabOrder();
		$this->customerWizardTabOrder();
	}

	public function jobTitleList()
	{
		$listTitle = 'jobTitleMenu';
		$type = '';
		$action = '';
		$default = 'owner';
		$belongsToID = '27';
		$belongsToType = 'Lists';

		$list = [
			'owner' => "Owner",
			'manager' => "Manager",
			'card' => "Card Holder",
			'clerk' => "Clerk",
			'grower' => "Master Grower",
			'assist' => "Grow Assistant",
			'trimmer' => "Trimmer",
			'packager' => "Packager",
			'cook' => "Cook"
		];

		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}


	public function userTypeList()
	{
		$listTitle = 'userTypeMenu';
		$type = '';
		$action = '';
		$default = 'king';
		$belongsToID = '';
		$belongsToType = 'Lists';

		$list = [
			'average' => "Average",
			'king' => "King",
			'rook' => "Rook",
			'knight' => "Knight",
			'pawn' => "Pawn"
		];

		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function badgeTypeList()
	{
		$listTitle = 'badgeTypeMenu';
		$type = '';
		$action = '';
		$default = 'Support';
		$belongsToID = '';
		$belongsToType = 'Lists';

		$list = [
			'support' => "Support",
			'key' => "Key"
		];

		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function identificationTypeList()
	{
		$listTitle = 'identificationTypeMenu';
		$type = '';
		$action = '';
		$default = 'Drivers License';
		$belongsToID = '';
		$belongsToType = 'Lists';

		$list = [
			'DriversLicense' => "Drivers License",
			'StateID' => "State Issued ID",
			'Passport' => "Passport",
			'MilitaryID' => "Military ID"
		];

		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function facilityTypeList()
	{
		$listTitle = 'facilityMenu';
		$type = '';
		$action = '';
		$default = 'RMC';
		$belongsToID = '';
		$belongsToType = 'Lists';

		$list = [
			'MMC' => "Medical MC",
			'RMC' => "Recreational MC",
			'MMIP' => "Medical MIP",
			'RMIP' => "Recreational MIP",
			'MOPC' => "Medical OPC",
			'ROPC' => "Recreational OPC",
		];

		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function entityTypeList()
	{
		$listTitle = 'entityTypeMenu';
		$type = '';
		$action = '';
		$default = 'Sole LLC';
		$belongsToID = '';
		$belongsToType = 'Lists';

		$list = [
			'SoleLLC' => "Sole LLC",
			'LLC' => "LLC",
			'SCorp' => "S-Corporation",
			'CCorp' => "C-Corporation",
			'Partnership' => "Partnership",
		];

		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function statesList()
	{
		$listTitle = 'statesMenu';
		$type = '';
		$action = '';
		$default = 'CO';
		$belongsToID = '23';
		$belongsToType = 'Lists';

		$list = [
			'AL' => "Alabama",
			'AK' => "Alaska",
			'AZ' => "Arizona",
			'AR' => "Arkansas",
			'CA' => "California",
			'CO' => "Colorado",
			'CT' => "Connecticut",
			'DE' => "Delaware",
			'DC' => "District Of Columbia",
			'FL' => "Florida",
			'GA' => "Georgia",
			'HI' => "Hawaii",
			'ID' => "Idaho",
			'IL' => "Illinois",
			'IN' => "Indiana",
			'IA' => "Iowa",
			'KS' => "Kansas",
			'KY' => "Kentucky",
			'LA' => "Louisiana",
			'ME' => "Maine",
			'MD' => "Maryland",
			'MA' => "Massachusetts",
			'MI' => "Michigan",
			'MN' => "Minnesota",
			'MS' => "Mississippi",
			'MO' => "Missouri",
			'MT' => "Montana",
			'NE' => "Nebraska",
			'NV' => "Nevada",
			'NH' => "New Hampshire",
			'NJ' => "New Jersey",
			'NM' => "New Mexico",
			'NY' => "New York",
			'NC' => "North Carolina",
			'ND' => "North Dakota",
			'OH' => "Ohio",
			'OK' => "Oklahoma",
			'OR' => "Oregon",
			'PA' => "Pennsylvania",
			'RI' => "Rhode Island",
			'SC' => "South Carolina",
			'SD' => "South Dakota",
			'TN' => "Tennessee",
			'TX' => "Texas",
			'UT' => "Utah",
			'VT' => "Vermont",
			'VA' => " Virginia " ,
			'WA' => "Washington",
			'WV' => "West Virginia",
			'WI' => "Wisconsin",
			'WY' => "Wyoming"
		];
		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function formFieldsList()
	{
		$listTitle = 'formFields';
		$type = '';
		$action = '';
		$default = 'textBox';
		$belongsToID = '0';
		$belongsToType = 'Lists';

		$list = [
			1 => 'textBox',
			2 => 'textField',
			3 => 'dropDown',
			4 => 'dateMask',
			5 => 'dateRangePicker',
			6 => 'dateAndTimeRangePicker',
			7 => 'dateRangeButton',
			8 => 'phoneMask',
			9 => 'password',
			11 => 'checkBox',
			13 => 'radio',
			14 => 'timePicker',
		];
		$this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);
	}

	public function employeeWizardTabOrder()
	{
		$listTitle = 'employeeWizardTabOrder';
		$type = '';
		$action = '';
		//$default = '';
		$belongsToID = '';
		$belongsToType = 'List';

		$list = [
			1 => ['employee', "fa-briefcase"],
			2 => ['profile', "fa-user"],
			3 => ['customer', "fa-dollar"],
			4 => ['login', "fa-desktop"]

		];

		foreach ($list as $key => $value)
		{
			$Objects = Lists::create([
				'title' => $listTitle,
				'item' => $key,
				'name' => $value[0],
				'type' => $type,
				'action' => $action,
				'default' => $value[1],
				'owner_id' => $belongsToID,
				'owner_type' => $belongsToType
			]);
		}
	}

	public function customerWizardTabOrder()
	{
		$listTitle = 'customerWizardTabOrder';
		$type = '';
		$action = '';
		//$default = '';
		$belongsToID = '';
		$belongsToType = 'List';

		$list = [
			1 => ['profile', "fa-user"],
			2 => ['customer', "fa-dollar"],
			3 => ['login', "fa-desktop"]
		];

		foreach ($list as $key => $value)
		{
			$Objects = Lists::create([
				'title' => $listTitle,
				'item' => $key,
				'name' => $value[0],
				'type' => $type,
				'action' => $action,
				'default' => $value[1],
				'owner_id' => $belongsToID,
				'owner_type' => $belongsToType
			]);
		}
	}

    public function bootstrapCssClasses()
    {
        $listTitle = 'bootstrapClasses';
        $type = '';
        $action = '';
        $default = '';
        $belongsToID = '';
        $belongsToType = '';

        $list =[
            'active' => 'active',
            'affix' => 'affix',
            'alert' => 'alert',
            'alert-danger' => 'alert-danger',
            'alert-dismissible' => 'alert-dismissible',
            'alert-info' => 'alert-info',
            'alert-link' => 'alert-link',
            'alert-success' => 'alert-success',
            'alert-warning' => 'alert-warning',
            'arrow' => 'arrow',
            'badge' => 'badge',
            'bg-danger' => 'bg-danger',
            'bg-info' => 'bg-info',
            'bg-primary' => 'bg-primary',
            'bg-success' => 'bg-success',
            'bg-warning' => 'bg-warning',
            'bottom' => 'bottom',
            'breadcrumb' => 'breadcrumb',
            'btn' => 'btn',
            'btn-block' => 'btn-block',
            'btn-danger' => 'btn-danger',
            'btn-default' => 'btn-default',
            'btn-group' => 'btn-group',
            'btn-group-justified' => 'btn-group-justified',
            'btn-group-vertical' => 'btn-group-vertical',
            'btn-info' => 'btn-info',
            'btn-link' => 'btn-link',
            'btn-primary' => 'btn-primary',
            'btn-sm' => 'btn-sm',
            'btn-success' => 'btn-success',
            'btn-toolbar' => 'btn-toolbar',
            'btn-warning' => 'btn-warning',
            'btn-xs' => 'btn-xs',
            'caption' => 'caption',
            'caret' => 'caret',
            'carousel' => 'carousel',
            'carousel-caption' => 'carousel-caption',
            'carousel-control' => 'carousel-control',
            'carousel-indicators' => 'carousel-indicators',
            'carousel-inner' => 'carousel-inner',
            'center-block' => 'center-block',
            'checkbox' => 'checkbox',
            'checkbox-inline' => 'checkbox-inline',
            'close' => 'close',
            'col-lg-1' => 'col-lg-1',
            'col-lg-10' => 'col-lg-10',
            'col-lg-11' => 'col-lg-11',
            'col-lg-12' => 'col-lg-12',
            'col-lg-2' => 'col-lg-2',
            'col-lg-3' => 'col-lg-3',
            'col-lg-4' => 'col-lg-4',
            'col-lg-5' => 'col-lg-5',
            'col-lg-6' => 'col-lg-6',
            'col-lg-7' => 'col-lg-7',
            'col-lg-8' => 'col-lg-8',
            'col-lg-9' => 'col-lg-9',
            'col-lg-offset-0' => 'col-lg-offset-0',
            'col-lg-offset-1' => 'col-lg-offset-1',
            'col-lg-offset-10' => 'col-lg-offset-10',
            'col-lg-offset-11' => 'col-lg-offset-11',
            'col-lg-offset-12' => 'col-lg-offset-12',
            'col-lg-offset-2' => 'col-lg-offset-2',
            'col-lg-offset-3' => 'col-lg-offset-3',
            'col-lg-offset-4' => 'col-lg-offset-4',
            'col-lg-offset-5' => 'col-lg-offset-5',
            'col-lg-offset-6' => 'col-lg-offset-6',
            'col-lg-offset-7' => 'col-lg-offset-7',
            'col-lg-offset-8' => 'col-lg-offset-8',
            'col-lg-offset-9' => 'col-lg-offset-9',
            'col-lg-pull-0' => 'col-lg-pull-0',
            'col-lg-pull-1' => 'col-lg-pull-1',
            'col-lg-pull-10' => 'col-lg-pull-10',
            'col-lg-pull-11' => 'col-lg-pull-11',
            'col-lg-pull-12' => 'col-lg-pull-12',
            'col-lg-pull-2' => 'col-lg-pull-2',
            'col-lg-pull-3' => 'col-lg-pull-3',
            'col-lg-pull-4' => 'col-lg-pull-4',
            'col-lg-pull-5' => 'col-lg-pull-5',
            'col-lg-pull-6' => 'col-lg-pull-6',
            'col-lg-pull-7' => 'col-lg-pull-7',
            'col-lg-pull-8' => 'col-lg-pull-8',
            'col-lg-pull-9' => 'col-lg-pull-9',
            'col-lg-push-0' => 'col-lg-push-0',
            'col-lg-push-1' => 'col-lg-push-1',
            'col-lg-push-10' => 'col-lg-push-10',
            'col-lg-push-11' => 'col-lg-push-11',
            'col-lg-push-12' => 'col-lg-push-12',
            'col-lg-push-2' => 'col-lg-push-2',
            'col-lg-push-3' => 'col-lg-push-3',
            'col-lg-push-4' => 'col-lg-push-4',
            'col-lg-push-5' => 'col-lg-push-5',
            'col-lg-push-6' => 'col-lg-push-6',
            'col-lg-push-7' => 'col-lg-push-7',
            'col-lg-push-8' => 'col-lg-push-8',
            'col-lg-push-9' => 'col-lg-push-9',
            'col-md-1' => 'col-md-1',
            'col-md-10' => 'col-md-10',
            'col-md-11' => 'col-md-11',
            'col-md-12' => 'col-md-12',
            'col-md-2' => 'col-md-2',
            'col-md-3' => 'col-md-3',
            'col-md-4' => 'col-md-4',
            'col-md-5' => 'col-md-5',
            'col-md-6' => 'col-md-6',
            'col-md-7' => 'col-md-7',
            'col-md-8' => 'col-md-8',
            'col-md-9' => 'col-md-9',
            'col-md-offset-0' => 'col-md-offset-0',
            'col-md-offset-1' => 'col-md-offset-1',
            'col-md-offset-10' => 'col-md-offset-10',
            'col-md-offset-11' => 'col-md-offset-11',
            'col-md-offset-12' => 'col-md-offset-12',
            'col-md-offset-2' => 'col-md-offset-2',
            'col-md-offset-3' => 'col-md-offset-3',
            'col-md-offset-4' => 'col-md-offset-4',
            'col-md-offset-5' => 'col-md-offset-5',
            'col-md-offset-6' => 'col-md-offset-6',
            'col-md-offset-7' => 'col-md-offset-7',
            'col-md-offset-8' => 'col-md-offset-8',
            'col-md-offset-9' => 'col-md-offset-9',
            'col-md-pull-0' => 'col-md-pull-0',
            'col-md-pull-1' => 'col-md-pull-1',
            'col-md-pull-10' => 'col-md-pull-10',
            'col-md-pull-11' => 'col-md-pull-11',
            'col-md-pull-12' => 'col-md-pull-12',
            'col-md-pull-2' => 'col-md-pull-2',
            'col-md-pull-3' => 'col-md-pull-3',
            'col-md-pull-4' => 'col-md-pull-4',
            'col-md-pull-5' => 'col-md-pull-5',
            'col-md-pull-6' => 'col-md-pull-6',
            'col-md-pull-7' => 'col-md-pull-7',
            'col-md-pull-8' => 'col-md-pull-8',
            'col-md-pull-9' => 'col-md-pull-9',
            'col-md-push-0' => 'col-md-push-0',
            'col-md-push-1' => 'col-md-push-1',
            'col-md-push-10' => 'col-md-push-10',
            'col-md-push-11' => 'col-md-push-11',
            'col-md-push-12' => 'col-md-push-12',
            'col-md-push-2' => 'col-md-push-2',
            'col-md-push-3' => 'col-md-push-3',
            'col-md-push-4' => 'col-md-push-4',
            'col-md-push-5' => 'col-md-push-5',
            'col-md-push-6' => 'col-md-push-6',
            'col-md-push-7' => 'col-md-push-7',
            'col-md-push-8' => 'col-md-push-8',
            'col-md-push-9' => 'col-md-push-9',
            'col-sm-1' => 'col-sm-1',
            'col-sm-10' => 'col-sm-10',
            'col-sm-11' => 'col-sm-11',
            'col-sm-12' => 'col-sm-12',
            'col-sm-2' => 'col-sm-2',
            'col-sm-3' => 'col-sm-3',
            'col-sm-4' => 'col-sm-4',
            'col-sm-5' => 'col-sm-5',
            'col-sm-6' => 'col-sm-6',
            'col-sm-7' => 'col-sm-7',
            'col-sm-8' => 'col-sm-8',
            'col-sm-9' => 'col-sm-9',
            'col-sm-offset-0' => 'col-sm-offset-0',
            'col-sm-offset-1' => 'col-sm-offset-1',
            'col-sm-offset-10' => 'col-sm-offset-10',
            'col-sm-offset-11' => 'col-sm-offset-11',
            'col-sm-offset-12' => 'col-sm-offset-12',
            'col-sm-offset-2' => 'col-sm-offset-2',
            'col-sm-offset-3' => 'col-sm-offset-3',
            'col-sm-offset-4' => 'col-sm-offset-4',
            'col-sm-offset-5' => 'col-sm-offset-5',
            'col-sm-offset-6' => 'col-sm-offset-6',
            'col-sm-offset-7' => 'col-sm-offset-7',
            'col-sm-offset-8' => 'col-sm-offset-8',
            'col-sm-offset-9' => 'col-sm-offset-9',
            'col-sm-pull-0' => 'col-sm-pull-0',
            'col-sm-pull-1' => 'col-sm-pull-1',
            'col-sm-pull-10' => 'col-sm-pull-10',
            'col-sm-pull-11' => 'col-sm-pull-11',
            'col-sm-pull-12' => 'col-sm-pull-12',
            'col-sm-pull-2' => 'col-sm-pull-2',
            'col-sm-pull-3' => 'col-sm-pull-3',
            'col-sm-pull-4' => 'col-sm-pull-4',
            'col-sm-pull-5' => 'col-sm-pull-5',
            'col-sm-pull-6' => 'col-sm-pull-6',
            'col-sm-pull-7' => 'col-sm-pull-7',
            'col-sm-pull-8' => 'col-sm-pull-8',
            'col-sm-pull-9' => 'col-sm-pull-9',
            'col-sm-push-0' => 'col-sm-push-0',
            'col-sm-push-1' => 'col-sm-push-1',
            'col-sm-push-10' => 'col-sm-push-10',
            'col-sm-push-11' => 'col-sm-push-11',
            'col-sm-push-12' => 'col-sm-push-12',
            'col-sm-push-2' => 'col-sm-push-2',
            'col-sm-push-3' => 'col-sm-push-3',
            'col-sm-push-4' => 'col-sm-push-4',
            'col-sm-push-5' => 'col-sm-push-5',
            'col-sm-push-6' => 'col-sm-push-6',
            'col-sm-push-7' => 'col-sm-push-7',
            'col-sm-push-8' => 'col-sm-push-8',
            'col-sm-push-9' => 'col-sm-push-9',
            'col-xs-1' => 'col-xs-1',
            'col-xs-10' => 'col-xs-10',
            'col-xs-11' => 'col-xs-11',
            'col-xs-12' => 'col-xs-12',
            'col-xs-2' => 'col-xs-2',
            'col-xs-3' => 'col-xs-3',
            'col-xs-4' => 'col-xs-4',
            'col-xs-5' => 'col-xs-5',
            'col-xs-6' => 'col-xs-6',
            'col-xs-7' => 'col-xs-7',
            'col-xs-8' => 'col-xs-8',
            'col-xs-9' => 'col-xs-9',
            'col-xs-offset-0' => 'col-xs-offset-0',
            'col-xs-offset-1' => 'col-xs-offset-1',
            'col-xs-offset-10' => 'col-xs-offset-10',
            'col-xs-offset-11' => 'col-xs-offset-11',
            'col-xs-offset-12' => 'col-xs-offset-12',
            'col-xs-offset-2' => 'col-xs-offset-2',
            'col-xs-offset-3' => 'col-xs-offset-3',
            'col-xs-offset-4' => 'col-xs-offset-4',
            'col-xs-offset-5' => 'col-xs-offset-5',
            'col-xs-offset-6' => 'col-xs-offset-6',
            'col-xs-offset-7' => 'col-xs-offset-7',
            'col-xs-offset-8' => 'col-xs-offset-8',
            'col-xs-offset-9' => 'col-xs-offset-9',
            'col-xs-pull-0' => 'col-xs-pull-0',
            'col-xs-pull-1' => 'col-xs-pull-1',
            'col-xs-pull-10' => 'col-xs-pull-10',
            'col-xs-pull-11' => 'col-xs-pull-11',
            'col-xs-pull-12' => 'col-xs-pull-12',
            'col-xs-pull-2' => 'col-xs-pull-2',
            'col-xs-pull-3' => 'col-xs-pull-3',
            'col-xs-pull-4' => 'col-xs-pull-4',
            'col-xs-pull-5' => 'col-xs-pull-5',
            'col-xs-pull-6' => 'col-xs-pull-6',
            'col-xs-pull-7' => 'col-xs-pull-7',
            'col-xs-pull-8' => 'col-xs-pull-8',
            'col-xs-pull-9' => 'col-xs-pull-9',
            'col-xs-push-0' => 'col-xs-push-0',
            'col-xs-push-1' => 'col-xs-push-1',
            'col-xs-push-10' => 'col-xs-push-10',
            'col-xs-push-11' => 'col-xs-push-11',
            'col-xs-push-12' => 'col-xs-push-12',
            'col-xs-push-2' => 'col-xs-push-2',
            'col-xs-push-3' => 'col-xs-push-3',
            'col-xs-push-4' => 'col-xs-push-4',
            'col-xs-push-5' => 'col-xs-push-5',
            'col-xs-push-6' => 'col-xs-push-6',
            'col-xs-push-7' => 'col-xs-push-7',
            'col-xs-push-8' => 'col-xs-push-8',
            'col-xs-push-9' => 'col-xs-push-9',
            'collapse' => 'collapse',
            'collapsing' => 'collapsing',
            'container' => 'container',
            'container-fluid' => 'container-fluid',
            'control-label' => 'control-label',
            'divider' => 'divider',
            'dropdown' => 'dropdown',
            'dropdown-backdrop' => 'dropdown-backdrop',
            'dropdown-header' => 'dropdown-header',
            'dropdown-menu' => 'dropdown-menu',
            'dropdown-menu-left' => 'dropdown-menu-left',
            'dropdown-menu-right' => 'dropdown-menu-right',
            'dropdown-toggle' => 'dropdown-toggle',
			'dropdown-toggle-icon' => 'dropdown-toggle-icon',
            'embed-responsive' => 'embed-responsive',
            'embed-responsive-16by9' => 'embed-responsive-16by9',
            'embed-responsive-4by3' => 'embed-responsive-4by3',
            'fade' => 'fade',
            'form-control' => 'form-control',
            'form-control-feedback' => 'form-control-feedback',
            'form-control-static ' => 'form-control-static',
            'form-group' => 'form-group',
            'glyphicon' => 'glyphicon',
            'glyphicon-chevron-left' => 'glyphicon-chevron-left',
            'glyphicon-chevron-right' => 'glyphicon-chevron-right',
            'h1' => 'h1',
            'h2' => 'h2',
            'h3' => 'h3',
            'h4' => 'h4',
            'h5' => 'h5',
            'h6' => 'h6',
            'has-feedback' => 'has-feedback',
            'help-block' => 'help-block',
            'hidden' => 'hidden',
            'hidden-lg' => 'hidden-lg',
            'hidden-md' => 'hidden-md',
            'hidden-print' => 'hidden-print',
            'hidden-sm' => 'hidden-sm',
            'hidden-xs' => 'hidden-xs',
            'hide' => 'hide',
            'icon-bar' => 'icon-bar',
            'icon-next' => 'icon-next',
            'icon-prev' => 'icon-prev',
            'img-circle' => 'img-circle',
            'img-rounded' => 'img-rounded',
            'img-thumbnail' => 'img-thumbnail',
            'in' => 'in',
            'initialism' => 'initialism',
            'input-group' => 'input-group',
            'input-group-addon' => 'input-group-addon',
            'input-group-btn' => 'input-group-btn',
            'input-lg' => 'input-lg',
            'input-sm' => 'input-sm',
            'invisible' => 'invisible',
            'item' => 'item',
            'jumbotron' => 'jumbotron',
            'label' => 'label',
            'label-danger' => 'label-danger',
            'label-default' => 'label-default',
            'label-info' => 'label-info',
            'label-primary' => 'label-primary',
            'label-success' => 'label-success',
            'label-warning' => 'label-warning',
            'lead' => 'lead',
            'left' => 'left',
            'list-group' => 'list-group',
            'list-group-item' => 'list-group-item',
            'list-group-item-danger' => 'list-group-item-danger',
            'list-group-item-heading' => 'list-group-item-heading',
            'list-group-item-info' => 'list-group-item-info',
            'list-group-item-success' => 'list-group-item-success',
            'list-group-item-text' => 'list-group-item-text',
            'list-group-item-warning' => 'list-group-item-warning',
            'list-inline' => 'list-inline',
            'list-unstyled' => 'list-unstyled',
            'mark' => 'mark',
            'media' => 'media',
            'media-body' => 'media-body',
            'media-heading' => 'media-heading',
            'media-lis' => 'media-list',
            'media-object' => 'media-object',
            'modal' => 'modal',
            'modal-backdrop' => 'modal-backdrop',
            'modal-body' => 'modal-body',
            'modal-content' => 'modal-content',
            'modal-dialog' => 'modal-dialog',
            'modal-footer' => 'modal-footer',
            'modal-header' => 'modal-header',
            'modal-lg' => 'modal-lg',
            'modal-open' => 'modal-open',
            'modal-scrollbar-measure' => 'modal-scrollbar-measure',
            'modal-sm' => 'modal-sm',
            'modal-title' => 'modal-title',
            'nav' => 'nav',
            'nav-divider' => 'nav-divider',
            'nav-justified' => 'nav-justified',
            'nav-tabs' => 'nav-tabs',
            'nav-tabs-justified' => 'nav-tabs-justified',
            'navbar' => 'navbar',
            'navbar-brand' => 'navbar-brand',
            'navbar-btn' => 'navbar-btn',
            'navbar-collapse' => 'navbar-collapse',
            'navbar-default' => 'navbar-default',
            'navbar-fixed-bottom' => 'navbar-fixed-bottom',
            'navbar-fixed-top' => 'navbar-fixed-top',
            'navbar-form' => 'navbar-form',
            'navbar-header' => 'navbar-header',
            'navbar-inverse' => 'navbar-inverse',
            'navbar-left' => 'navbar-left',
            'navbar-link' => 'navbar-link',
            'navbar-nav' => 'navbar-nav',
            'navbar-right' => 'navbar-right',
            'navbar-static-top' => 'navbar-static-top',
            'navbar-text' => 'navbar-text',
            'navbar-toggle' => 'navbar-toggle',
            'next' => 'next',
            'page-header' => 'page-header',
            'pager' => 'pager',
            'pagination' => 'pagination',
            'panel' => 'panel',
            'panel-body' => 'panel-body',
            'panel-danger' => 'panel-danger',
            'panel-default' => 'panel-default',
            'panel-footer' => 'panel-footer',
            'panel-group' => 'panel-group',
            'panel-heading' => 'panel-heading',
            'panel-info' => 'panel-info',
            'panel-primary' => 'panel-primary',
            'panel-success' => 'panel-success',
            'panel-title' => 'panel-title',
            'panel-warning' => 'panel-warning',
            'popover' => 'popover',
            'popover-content' => 'popover-content',
            'popover-title' => 'popover-title',
            'pre-scrollable' => 'pre-scrollable',
            'prev' => 'prev',
            'progress' => 'progress',
            'progress-bar' => 'progress-bar',
            'progress-bar-danger' => 'progress-bar-danger',
            'progress-bar-info' => 'progress-bar-info',
            'progress-bar-striped' => 'progress-bar-striped',
            'progress-bar-success' => 'progress-bar-success',
            'progress-bar-warning' => 'progress-bar-warning',
            'pull-left' => 'pull-left',
            'pull-right' => 'pull-right',
            'right' => 'right',
            'row' => 'row',
            'show' => 'show',
            'small' => 'small',
            'sr-only' => 'sr-only',
            'tab-pane' => 'tab-pane',
            'table' => 'table',
            'table-bordered' => 'table-bordered',
            'table-responsive' => 'table-responsive',
            'text-capitalize' => 'text-capitalize',
            'text-center' => 'text-center',
            'text-danger' => 'text-danger',
            'text-hide' => 'text-hide',
            'text-info' => 'text-info',
            'text-justify' => 'text-justify',
            'text-left' => 'text-left',
            'text-lowercase' => 'text-lowercase',
            'text-muted' => 'text-muted',
            'text-nowrap' => 'text-nowrap',
            'text-primary' => 'text-primary',
            'text-right' => 'text-right',
            'text-success' => 'text-success',
            'text-uppercase' => 'text-uppercase',
            'text-warning' => 'text-warning',
            'thumbnail' => 'thumbnail',
            'tooltip' => 'tooltip',
            'tooltip-arrow' => 'tooltip-arrow',
            'tooltip-inner' => 'tooltip-inner',
            'top' => 'top',
            'visible-lg' => 'visible-lg',
            'visible-lg-block' => 'visible-lg-block',
            'visible-lg-inline' => 'visible-lg-inline',
            'visible-lg-inline-block' => 'visible-lg-inline-block',
            'visible-md' => 'visible-md',
            'visible-md-block' => 'visible-md-block',
            'visible-md-inline' => 'visible-md-inline',
            'visible-md-inline-block' => 'visible-md-inline-block',
            'visible-print' => 'visible-print',
            'visible-print-block' => 'visible-print-block',
            'visible-print-inline' => 'visible-print-inline',
            'visible-print-inline-block' => 'visible-print-inline-block',
            'visible-sm' => 'visible-sm',
            'visible-sm-block' => 'visible-sm-block',
            'visible-sm-inline' => 'visible-sm-inline',
            'visible-sm-inline-block' => 'visible-sm-inline-block',
            'visible-xs' => 'visible-xs',
            'visible-xs-block' => 'visible-xs-block',
            'visible-xs-inline' => 'visible-xs-inline',
            'visible-xs-inline-block' => 'visible-xs-inline-block',
            'well' => 'well',
            'well-lg' => 'well-lg',
            'well-sm' => 'well-sm',
			'navbar-content'=>'navbar-content',
			'easeInQuart'=>'easeInQuart',
			'easeOutQuart'=>'easeOutQuart',
			'easeInBack'=>'easeInBack',
			'easeOutBack'=>'easeOutBack',
			'easeInOutBack'=>'easeInOutBack',
			'steps'=>'steps',
			'jumping'=>'jumping',
			'rubber'=>'rubber',
			'nano-content'=>'nano-content',
			'nano-pane'=>'nano-pane',
			'list-link'=>'list-link',
			'aside-xs-in'=>'aside-xs-in',
			'bord-all'=>'bord-all',
			'bord-top'=>'bord-top',
			'bord-btm'=>'bord-btm',
			'bord-left'=>'bord-left',
			'bord-rgt'=>'bord-rgt',
			'bord-hor'=>'bord-hor',
			'bord-ver'=>'bord-ver',
			'list-divider'=>'list-divider',
			'nano'=>'nano',
			'mega-dropdown'=>'mega-dropdown',
			'open'=>'open',
			'mega-dropdown-toggle'=>'mega-dropdown-toggle',
			'navbar-top-links'=>'navbar-top-links',
			'widget-header'=>'widget-header',
			'widget-bg'=>'widget-bg',
			'widget-title'=>'widget-title',
			'widget-body'=>'widget-body',
			'widget-img'=>'widget-img',
			'speech'=>'speech',
			'timeline'=>'timeline',
			'timeline-header'=>'timeline-header',
			'timeline-header-title'=>'timeline-header-title',
			'timeline-stat'=>'timeline-stat',
			'timeline-entry'=>'timeline-entry',
			'timeline-entry-inner'=>'timeline-entry-inner',
			'timeline-time'=>'timeline-time',
			'timeline-icon'=>'timeline-icon',
			'timeline-label'=>'timeline-label',
			'two-column'=>'two-column',
			'tag'=>'tag',
			'tag-lg'=>'tag-lg',
			'tag-md'=>'tag-md',
			'tag-sm'=>'tag-sm',
			'tag-xs'=>'tag-xs',
			'btn-group-lg'=>'btn-group-lg',
			'btn-group-md'=>'btn-group-md',
			'btn-group-sm'=>'btn-group-sm',
			'btn-group-xs'=>'btn-group-xs',
			'mail-attach'=>'mail-attach',
			'mail-attach-label'=>'mail-attach-label',
			'mail-attach-list'=>'mail-attach-list',
			'mail-attach-file'=>'mail-attach-file',
			'mail-nav'=>'mail-nav',
			'mail-list'=>'mail-list',
			'mail-list-unread'=>'mail-list-unread',
			'mail-control'=>'mail-control',
			'mail-star'=>'mail-star',
			'mail-starred'=>'mail-starred',
			'mail-from'=>'mail-from',
			'mail-subject'=>'mail-subject',
			'mail-attach-icon'=>'mail-attach-icon',
			'mail-time'=>'mail-time',
			'mail-toggle'=>'mail-toggle',
			'mail-menu'=>'mail-menu',
			'mail-message-reply'=>'mail-message-reply',
			'wz-nav-off'=>'wz-nav-off',
			'wz-icon-inline'=>'wz-icon-inline',
			'wz-icon-bw'=>'wz-icon-bw',
			'wz-classic'=>'wz-classic',
			'wz-heading'=>'wz-heading',
			'wz-steps'=>'wz-steps',
			'wz-desc'=>'wz-desc',
			'wz-icon-done'=>'wz-icon-done',
			'panel-overlay-wrap'=>'panel-overlay-wrap',
			'panel-overlay'=>'panel-overlay',
			'panel-overlay-title'=>'panel-overlay-title',
			'panel-overlay-icon'=>'panel-overlay-icon',
			'panel-overlay-content'=>'panel-overlay-content',
			'alert-wrap'=>'alert-wrap',
			'floating-container'=>'floating-container',
			'alert-title'=>'alert-title',
			'alert-message'=>'alert-message',
			'alert-mint'=>'alert-mint',
			'alert-purple'=>'alert-purple',
			'alert-pink'=>'alert-pink',
			'alert-dark'=>'alert-dark',
			'animated'=>'animated',
			'fadeOut'=>'fadeOut',
			'jellyIn'=>'jellyIn',
			'form-checkbox'=>'form-checkbox',
			'form-radio'=>'form-radio',
			'show-form'=>'show-form',
			'disabled'=>'disabled',
			'form-normal'=>'form-normal',
			'has-success'=>'has-success',
			'has-warning'=>'has-warning',
			'has-error'=>'has-error',
			'plan'=>'plan',
			'plan-title'=>'plan-title',
			'plan-icon'=>'plan-icon',
			'plan-desc'=>'plan-desc',
			'list-todo'=>'list-todo',
			'morris-full-content'=>'morris-full-content',
			'morris-donut'=>'morris-donut',
			'flot-full-content'=>'flot-full-content',
			'pie-title-center'=>'pie-title-center',
			'pie-value'=>'pie-value',
			'range-vertical'=>'range-vertical',
			'fc-unthemed'=>'fc-unthemed',
			'fc-row'=>'fc-row',
			'fc-popover'=>'fc-popover',
			'fc-widget-header'=>'fc-widget-header',
			'fc-toolbar'=>'fc-toolbar',
			'fc-button-group'=>'fc-button-group',
			'fc-left'=>'fc-left',
			'fc-center'=>'fc-center',
			'fc-right'=>'fc-right',
			'fc-button'=>'fc-button',
			'fc'=>'fc',
			'fc-state-default'=>'fc-state-default',
			'fc-corner-right'=>'fc-corner-right',
			'fc-corner-left'=>'fc-corner-left',
			'fc-today'=>'fc-today',
			'fc-event'=>'fc-event',
			'fc-more-popover'=>'fc-more-popover',
			'fc-highlight'=>'fc-highlight',
			'ui-draggable-dragging'=>'ui-draggable-dragging',
			'ui-draggable'=>'ui-draggable',
			'table-toolbar-left'=>'table-toolbar-left',
			'table-toolbar-right'=>'table-toolbar-right',
			'box-block'=>'box-block',
			'box-inline'=>'box-inline',
			'box-vmiddle'=>'box-vmiddle',
			'box-vmiddle-wrap'=>'box-vmiddle-wrap',
			'text-thin'=>'text-thin',
			'text-normal'=>'text-normal',
			'text-semibold'=>'text-semibold',
			'text-bold'=>'text-bold',
			'text-5x'=>'text-5x',
			'text-4x'=>'text-4x',
			'text-2x'=>'text-2x',
			'text-lg'=>'text-lg',
			'text-sm'=>'text-sm',
			'text-xs'=>'text-xs',
			'text-overflow'=>'text-overflow',
			'text-unit'=>'text-unit',
			'unselectable'=>'unselectable',
			'text-lg-right'=>'text-lg-right',
			'text-lg-center'=>'text-lg-center',
			'text-lg-left'=>'text-lg-left',
			'text-md-right'=>'text-md-right',
			'text-md-center'=>'text-md-center',
			'text-md-left'=>'text-md-left',
			'text-sm-right'=>'text-sm-right',
			'text-sm-center'=>'text-sm-center',
			'text-sm-left'=>'text-sm-left',
			'text-xs-right'=>'text-xs-right',
			'text-xs-center'=>'text-xs-center',
			'text-xs-left'=>'text-xs-left',
			'icon-wrap'=>'icon-wrap',
			'icon-txt'=>'icon-txt',
			'icon-wrap-lg'=>'icon-wrap-lg',
			'icon-wrap-md'=>'icon-wrap-md',
			'icon-wrap-sm'=>'icon-wrap-sm',
			'icon-wrap-xs'=>'icon-wrap-xs',
			'icon-circle'=>'icon-circle',
			'icon-lg'=>'icon-lg',
			'icon-2x'=>'icon-2x',
			'icon-3x'=>'icon-3x',
			'icon-4x'=>'icon-4x',
			'icon-5x'=>'icon-5x',
			'img-mar'=>'img-mar',
			'img-border'=>'img-border',
			'img-xs'=>'img-xs',
			'img-sm'=>'img-sm',
			'img-md'=>'img-md',
			'img-lg'=>'img-lg',
			'img-holder'=>'img-holder',
			'mar-no'=>'mar-no',
			'mar-all'=>'mar-all',
			'mar-top'=>'mar-top',
			'mar-btm'=>'mar-btm',
			'mar-lft'=>'mar-lft',
			'mar-rgt'=>'mar-rgt',
			'mar-hor'=>'mar-hor',
			'mar-ver'=>'mar-ver',
			'pad-no'=>'pad-no',
			'pad-all'=>'pad-all',
			'pad-top'=>'pad-top',
			'pad-btm'=>'pad-btm',
			'pad-lft'=>'pad-lft',
			'pad-rgt'=>'pad-rgt',
			'pad-hor'=>'pad-hor',
			'pad-ver'=>'pad-ver',
			'eq-height'=>'eq-height',
			'eq-auto'=>'eq-auto',
			'eq-no-panel'=>'eq-no-panel',
			'eq-min-width'=>'eq-min-width',
			'eq-box-xs'=>'eq-box-xs',
			'eq-box-lg'=>'eq-box-lg',
			'eq-box-md'=>'eq-box-md',
			'eq-box-sm'=>'eq-box-sm',
			'menu-popover'=>'menu-popover',
			'badge-header'=>'badge-header',
			'img-user'=>'img-user',
			'username'=>'username',
			'btn-dashboard'=>'btn-dashboard',
			'badge-dash-button'=>'badge-dash-button',
			'active-link'=>'active-link',
			'active-sub'=>'active-sub',
			'sub-menu'=>'sub-menu',
			'shortcut-grid'=>'shortcut-grid',
			'mainnav-widget'=>'mainnav-widget',
			'btn-trans'=>'btn-trans',
			'btn-icon'=>'btn-icon',
			'btn-circle'=>'btn-circle',
			'btn-rounded'=>'btn-rounded',
			'btn-active-success'=>'btn-active-success',
			'btn-active-warning'=>'btn-active-warning',
			'btn-active-info'=>'btn-active-info',
			'btn-active-danger'=>'btn-active-danger',
			'btn-active-mint'=>'btn-active-mint',
			'btn-active-pink'=>'btn-active-pink',
			'btn-active-purple'=>'btn-active-purple',
			'btn-active-dark'=>'btn-active-dark',
			'btn-active-primary'=>'btn-active-primary',
			'btn-active-default' => 'btn-active-default'
		];

        $this->save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType);

    }

	public function save($list, $listTitle, $type, $action, $default, $belongsToID, $belongsToType)
	{
		foreach ($list as $key => $value)
		{
			/* /////////////////////////////////
			 *
			 *TODO: Make this creator more dynamic!
			 *
			 *//////////////////////////////////
			$Objects = Lists::create([
				'title' => $listTitle,
				'item' => $key,
				'name' => $value,
				'type' => $type,
				'action' => $action,
				'default' => $default,
				'owner_id' => $belongsToID,
				'owner_type' => $belongsToType
			]);
		}
	}
}
