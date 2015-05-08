<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Event::listen('illuminate.query', function($sql)
{
	//var_dump( $sql );
});


Route::any('/', 'WelcomeController@index');

Route::any('dashboard', ['uses' => 'DashboardController@index', 'as' => 'name']);


Route::resource('interfaceObjects','InterfaceObjectsController');

Route::resource('lists','ListsController');

Route::resource('profile','ProfileController');

Route::resource('user','UsersController');

Route::resource('employee', 'EmployeeController');

Route::resource('facility', 'FacilityController');


Route::get('interfaceObjects/create/{type}/{order}','InterfaceObjectsController@create');

Route::get('home', 'DashboardController@index');

Route::get('mailbox', 'DashboardController@inbox');

Route::get('mailbox/inbox', 'DashboardController@inbox');

Route::get('mailbox/compose', 'DashboardController@compose');

Route::get('mailbox/read', 'DashboardController@read');

Route::get('calender', 'DashboardController@calendar');

Route::any('profile/pictureSave', 'ProfileController@uploadAndSaveProfilePicture');

/*
 * Seed saver
 */
Route::get('exportSeed', function()
{
    \DbExportHandler::seed();
    return redirect()->back();
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('close.modal', function()
{
	return view('edit.close');
});

Route::get('demo1',  function()
{
	return view('.pages.demo1');
});

Route::get('icons',  function()
{
    return view('.partials.fields.icons');
});

//Route::get('employee/{userProfile}',  function($userProfile)
//{
	//return view('', compact('userProfile'));
//});


Route::any('elementEditor/{interfaceObject}',  function(Bosspos\InterfaceObject $object, Bosspos\User $user, Bosspos\Lists $list)
{
	//TODO get this out of routes
	$bootstrapClasses = $list->whereTitle('bootstrapClasses')->get();

	//TODO get this out of routes
	$savedClasses = $object->find($object->id)->objectClasses;

    return view('.edit.elementForm', compact('system', 'object', 'user', 'bootstrapClasses', 'savedClasses'));
});

Route::any('upload/{userProfile}',  function($userProfile)
{
	return view('.partials.ui.dropzone', compact('userProfile'));
});

Route::get('chart', ['as' => 'profile', function()
{
    return view('.partials.chart');
}]);

Route::get('fields', ['as' => '/', function()
{
    return view('.partials.fields');
}]);

Route::get('buttons', ['as' => '/', function()
{
    return view('.partials.ui.buttons');
}]);

Route::get('textBox', ['as' => '/', function()
{
    return view('.partials.fields.textBox');
}]);

Route::get('wizards', ['as' => '/', function()
{
    return view('.partials.wizards.wizards');
}]);
