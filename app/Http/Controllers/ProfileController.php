<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
	// user need to be authenticated to access functionality of this controller
	public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Direct user to create profile input form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createProfile');
    }
	// obtain the id of the authenticated user
    public function getId(){
		$id = Auth::id();
		return $id;
	}
    /**
     * Show the form for creating a new Profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$id = $this->getId();
        $profile = Profile::where('id', $id)->get();

		return view('viewProfile', ['userProfile' => $profile]);
    }

    /**
     * Store a newly created Profile in Database table called profiles.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$id = $this->getId();

		// validate profile form inputs
        $profileInputs = $request->validate([
			'firstname'=>'required|string',
			'lastname'=>'required|string',
			'usertype'=>'required',
			'gender'=>'required',
			'dateofbirth'=>'required|date',
			'phone'=>'required'
		]);
		// new profile object being created from model
		$profiles = new Profile([
		    'id' =>$id,
			'firstname'=>$request->get('firstname'),
			'lastname'=>$request->get('lastname'),
			'usertype'=>$request->get('usertype'),
			'gender'=>$request->get('gender'),
			'dateofbirth'=>$request->get('dateofbirth'),
			'phone'=>$request->get('phone')
		]);

	    if($this->is_duplicate($profiles->firstname, $profiles->lastname, $profiles->usertype)== false){
			return redirect('profile')->with('duplicate','The profile already exists.');
		}
        else{
		$profiles->save();
		return redirect('profile')->with('success','The record added successfully');
		}
    }
	//check for duplicate firstname, lastname and usertype
	public function is_duplicate($firstname,$lastname,$usertype){
		$newProfile = new Profile;
		$result = $newProfile::where(['firstname'=>$firstname,'lastname'=>$lastname,'usertype'=>$usertype]);

		if($result->count()>0){
			return false;
		}else{
			return true;
		}
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
