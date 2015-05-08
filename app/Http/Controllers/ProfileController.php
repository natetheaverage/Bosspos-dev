<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\InterfaceObjects;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller  {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('new.user', compact('fields', 'fakeInfo', 'formUrl', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, Profile $profile)
    {

        $input = $request->all();
        $phone = $input['phone'];
        $phone = str_replace(")", "",$phone);
        $phone = str_replace("(", "",$phone);
        $phone = str_replace("-", "",$phone);
        $phone = str_replace(" ", "",$phone);
        $phone = $phone + 0;
        $input['phone'] = $phone;
        //dd($input);
        $profile->create($input);

        return redirect('profile/create');
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


	/**
	 * To upload profile pictures
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function uploadAndSaveProfilePicture(Request $uploading, Response $response)
	{
		// Who's profile pic is this?
		$userProfile = Profile::find($uploading->profileId);
		// Where are we saving it?
		$publicStorage = Storage::disk('localPublic');
		// What name shall we prefix the file?
		$userProfileNameFull = studly_case($userProfile->last_name).studly_case($userProfile->first_name);
		// If there isn't a directory create one for the user.
		$directory = 'img/users/'.studly_case($userProfile->last_name[0]).'/'.$userProfileNameFull;
		$publicStorage->makeDirectory($directory);
		//If the file existed make an array of any existing files to delete after upload
		$filesToDelete = $publicStorage->files($directory);
		// What is the file they are uploading
		$file = $uploading->file('file');
		// What is the file extension for the uploaded file
		$extension =$file->getClientOriginalExtension();
		// Lets name the file we wish to save
		$filename = $userProfileNameFull.'-'.str_random(6).'.'.$extension;
		// Open the image resource
		$img = Image::make($file);
		// resize the image to a width of 300 and constrain aspect ratio (auto height)
		$img->resize(300, null, function ($constraint)
		{$constraint->aspectRatio();
		});
		// Make thumbnail
		$upload_success = $img->resize(100, null, function ($constraint)
		{
			$constraint->aspectRatio();
		})->crop(100, 100)->save($directory.'/'.$filename);

		// Set the filename for the database
		// TODO I can only seem to save the path or the filename if i do the two together it erases the file extension
		// TODO need to fix this bad!!!!
		$userProfile->profile_picture = $filename;

		// If successfull
		if( $upload_success ) {
			// Delete old files
			$publicStorage->delete($filesToDelete);

			// Save filename to database
			$userProfile->save();


			// Let the uploader know it worked
			return $response->header('success', 100);
		} else {
			return $response->header('error', 400);
		}

	}

}
