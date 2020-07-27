<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodPressure;

class BloodPressureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodPressures = BloodPressure::all();
		return view('viewBloodPressure',['userBloodPressure' => $bloodPressures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('createBloodPressure');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate patient form inputs (remember to add foreign key)
        $bloodPressureInputs = $request->validate([
			'date'=>'required|string',
			'time'=>'required|string',
			'systolicPressure'=>'required|string',
			'diastolicPressure'=>'required|string'
		]);
		// new profile object being created from model
		$bloodPressures = new BloodPressure([
			'illnessID'=>'1',
			'date'=>$request->get('date'),
			'time'=>$request->get('time'),
			'systolicPressure'=>$request->get('systolicPressure'),
			'diastolicPressure'=>$request->get('diastolicPressure'),
			'heartRate'=>$request->get('heartRate'),
			'comment'=>$request->get('comment')
		]);
	
		$bloodPressures->save();
		return redirect('bloodpressure/create')->with('success','The record added successfully');	
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
