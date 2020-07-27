<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PatientIllness;
use App\Patient;

class PatientIllnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPatientIllness');
    }
	
    function getPatientID(){
		$patientID = DB::table('users')
            ->join('profiles', 'profiles.id', 'users.id')
            ->join('patients', 'patients.userID', 'profiles.userID')
            ->select('patients.patientID')
            ->get();
			//dd($patientID);
			if($patientID->isEmpty())
				return "empty record";
			else
				return $patientID;
	}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// validate profile form inputs
        $patientIllnessInputs = $request->validate([
			'illness'=>'required'
		]);
		// new profile object being created from model
		$patientIllness = new PatientIllness([
		    //'patientID'=>
			'illnessID'=>$request->get('illness')
		]);

		$patientID = DB::table('users')
            ->join('profiles', 'profiles.id', 'users.id')
            ->join('patients', 'patients.userID', 'profiles.userID')
            //->select('patients.patientID')
			//->insert()
            ->get();
		dd();	
		if($patientID->isEmpty())
			return redirect('patientIllness/create')->with('createProfile','You need to create profile');
        else
		    $patientIllness->save();	
		    return redirect('patientIllness/create')->with('success','The record added successfully');
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
