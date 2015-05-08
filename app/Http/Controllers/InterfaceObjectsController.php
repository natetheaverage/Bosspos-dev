<?php namespace Bosspos\Http\Controllers;

use Bosspos\Lists;
use Bosspos\ObjectClasses;
use Bosspos\InterfaceObject;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Bosspos\Services\UpdatedUserSession as Update;

class InterfaceObjectsController extends Controller {

	/**
	 * Show the form for creating a new dashboard button.
	 *
	 * @return Response
	 */
	public function create($type, $order, Update $userSession)
	{
		$order++;
		Model::unguard();
		if($type == 'DashboardMain'){
			$Objects = InterfaceObject::create([
				'menu_id'               => '0',                 //id for The Menu this belongs to
				'menu_name'             => $type,               //-- its name
				'menu_order'            => $order,               //-- the order
				'family'                => 'button',                  // The family the object belongs to (box, form, button etc...
				'type'                  => 'largeButton',         // Type of object in the family
				'class'                 => 'btn btn-active-success btn-default btn-dashboard',
				'label'                 => 'New Button',           // header / Label displayed
				'href'                  => '/dashboard',          // target for links
				'disabled'              => null,              // is this disabled?
				'owner_id'              => 1,                 // id if this object requires an owner
				'owner_type'            => 'Average',       //-- owner type ( this doesn't need to be a user)
			]);
		}elseif($type == 'MainNavigation')
		{
			$Objects = InterfaceObject::create([
				'menu_id'               => '1',                 //id for The Menu this belongs to
				'menu_name'             => $type,               //-- its name
				'menu_order'            => $order,               //-- the order
				'family'                => 'button',                  // The family the object belongs to (box, form, button etc...
				'type'                  => 'navigation',         // Type of object in the family
				'label'                 => 'New Button',           // header / Label displayed
				'href'                  => '#',          // target for links
				'disabled'              => null,              // is this disabled?
				'owner_id'              => 1,                 // id if this object requires an owner
				'owner_type'            => 'Average',       //-- owner type ( this doesn't need to be a user)
			]);
		}
		Model::reguard();

		$userSession->loadCurrentUser(Auth::user()->id);
		return redirect()->back();
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
    public function update(InterfaceObject $interfaceObject, Request $request, Update $userSession)
    {

        Model::unguard();
        $input = Request::All();
        $object = InterfaceObject::find($input['id']);
		$this->saveToObjectClasses($object, $input);
		$this->saveToInterfaceObject($input, $object);
		Model::reguard();
		$userSession->loadCurrentUser(Auth::user()->id);
        return redirect('close.modal');
    }


    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($interfaceObject)
	{
		InterfaceObject::destroy($interfaceObject);
		return redirect()->back();
	}

	/**
	 * Saves the class ids to ObjectClass for access when editing
	 *
	 * @param $object
	 * @param $input
	 */
	private function saveToObjectClasses($object, $input)
	{
		ObjectClasses::where('object_id', $object->id)->delete();

		foreach ($input['class'] as $class_id)
		{
			ObjectClasses::create([
				'object_id'   => $object->id,
				'object_type' => get_class($object),
				'class_id'    => $class_id,
				'user_id'     => $object->owner_id
			]);
		}

	}

	/**
	 * Saves a text based class list to the object
	 *
	 * @param $input
	 * @param $object
	 * @return mixed
	 */
	private function saveToInterfaceObject($input, $object)
	{
		$classList = '';
		$classes = Lists::where('title', 'bootstrapClasses');
		foreach ($classes->find($input['class']) as $class)
		{
			$classList .= $class->name . " ";
		}
		$input['class'] = $classList;
		$object->update(array_except($input, ['_method', '_token', 'classes']));

		return $input;
	}

}
