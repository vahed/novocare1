<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use App\Profile;

class PatientController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		//$id = Auth::id();
        //$patient = Patient::where('id', $id)->get();
		$patient = Patient::all();

		return view('viewPatient', ['userPatient' => $patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	// get the userID from profiles table  
	public function getProfile_userID(){
		$id = Auth::id();
		
		$profile_userID = Profile::where('id', $id)->get()->first();
		return $profile_userID->userID;
		
	}
    public function store(Request $request)
    {
		$this->getProfile_userID();
        // validate patient form inputs (remember to add foreign key)
        $patientInputs = $request->validate([
			'nextOfKin'=>'required|string',
			'bloodType'=>'required|string',
			'isDisabled'=>'required|string'
		]);
		// new profile object being created from model
		$patients = new Patient([
		    'userID'=> $this->getProfile_userID(),
			'nextOfKin'=>$request->get('nextOfKin'),
			'bloodType'=>$request->get('bloodType'),
			'isDisabled'=>$request->get('isDisabled')
		]);
	
		$patients->save();
		return redirect('patient/create')->with('success','The record added successfully');	
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
