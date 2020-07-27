<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diabetes;

class DiabetesController extends Controller
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
        $diabetes = Diabetes::all();

		return view('viewDiabetes', ['userDiabetes' => $diabetes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDiabetes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		// validate diabetes form inputs
        $diabetesInputs = $request->validate([
			'date'=>'required',
			'time'=>'required',
			'beforeFood'=>'required|string',
			'afterFood'=>'required|string',
			'sugarLevel'=>'required'
		]);
		// new diabetes object being created from model
		$diabetes = new Diabetes([
			'illnessID'=>'2',
			'date'=>$request->get('date'),
			'time'=>$request->get('time'),
			'beforFood'=>$request->get('beforFood'),
			'afterFood'=>$request->get('afterFood'),
			'sugarLevel'=>$request->get('sugarLevel'),
			'comment'=>$request->get('comment')
		]);
	
	    if($this->is_duplicate($profiles->firstname, $profiles->lastname, $profiles->usertype)== false){
			return redirect('profile')->with('duplicate','The profile already exists.');
		}
        else{
		$profiles->save();
		return redirect('profile')->with('success','The record added successfully');
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
