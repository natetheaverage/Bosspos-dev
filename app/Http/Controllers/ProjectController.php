<?php namespace Boss\Http\Controllers;

use Boss\Http\Requests;
use Boss\Http\Controllers\Controller;
use Boss\Pos\Conversations\Conversation;
use Boss\Pos\Conversations\Message;
use Boss\Pos\Projects\Project;
use Boss\Pos\Projects\Task;
use Boss\Pos\Users\User;
use Boss\Repositories\Repo;
use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Repo $repo)
    {
		\JavaScript::put([
			'projects' => $repo->projects(1),
			'usersBasic' => $repo->find('usersBasic'),
			'messageCounter' => Message::all()->count(),
			'conversationCounter' => Conversation::all()->count()
		]);
		return view('.pages.project.vueDirectory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		return view('.pages.project.manager');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
