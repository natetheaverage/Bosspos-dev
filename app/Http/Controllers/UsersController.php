<?php namespace Boss\Http\Controllers;

use Boss\Customer;
use Boss\Employee;
use Boss\InterfaceObjects;
use Boss\Lists;
use Boss\Profile;
use app\Services\Repo;
use Boss\User;
use Boss\Http\Requests;
use Boss\Services\UserCreation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class UsersController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        $user = Auth::user();

        return view('pages.users.directory', compact('users', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(UserCreation $form)
    {
        $user = Auth::user();
        $fields = $form->createFields(1);
        $fakeInfo = $form->fillerInfo(1);
        $formUrl = 'user';

        return view('new.user', compact('fields', 'fakeInfo', 'formUrl', 'user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(User $user, Request $request)
    {

        $input = $request->all();
        $user->create($input);

        Session::put('user', $user->where('email', $request->email)->get());

        return redirect('profile/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(User $user)
    {
        return view('pages.user.profile',  compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(User $users)
    {
        $oldInfo = $users;

        $user = Auth::user();

        $fields = Schema::getColumnListing('users');

        return view('edit.user', compact('user', 'oldInfo', 'fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(User $users, Request $request)
    {
        Model::unguard();

        $input = $request->all();

        $users = User::findOrFail($input['id']);

        $users->update(array_except($input,['_method', '_token']));

        return redirect()->action('UsersController@show', $users);
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
