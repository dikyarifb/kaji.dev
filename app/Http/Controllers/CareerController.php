<?php

namespace App\Http\Controllers;


use App\career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$career = new career;

    	$career = career::paginate(10);

    	return view('career',compact('career'));

    }

    public function newJob()
    {
    	return view('newcareer');
    }

    public function store(Request $request)
    {


    	$this->validate($request, [
    		'name' => 'regex:/^[\pL\s\-]+$/u',
		]);	
    	
    	$career = new career;

    	$career->name = $request->name;
    	$career->description = $request->description;
    	$career->responsibility = ($request->responsibility == null) ? '' : $request->responsibility;
    	$career->tool = ($request->tool == null) ? '' : $request->tool;
    	// jika tool nilainya NULL ubah jadi '' kalo ngak ya terserah
    	$career->requirement = $request->requirement;

    	$career->save();

    	//$request->session()->flash('status', 'Task was successful!');
    	return redirect('/career')->with(['message' => 'Job Added!','status' => 'success']);
    	//return redirect('/career');
    }

    public function delete($id)
    {

    	$career = career::findOrFail($id);
    	$career->delete();
    	return redirect('/career')->with(['message' => 'Job Deleted!','status' => 'danger']);

    }

    public function edit($id)
    {
    	
    	$career = career::findOrFail($id);
    	// dd($career);
    	return view('editcareer',compact('career'));
    }

    public function update(Request $request)
    {


    	$career = career::findOrFail($request->id);

    	$this->validate($request, [
    		'name' => 'regex:/^[\pL\s\-]+$/u',
		]);	


    	$career->name = $request->name;
    	$career->description = $request->description;
    	$career->responsibility = ($request->responsibility == null) ? '' : $request->responsibility;
    	$career->tool = ($request->tool == null) ? '' : $request->tool;
    	// jika tool nilainya NULL ubah jadi '' kalo ngak ya terserah
    	$career->requirement = $request->requirement;

    	$career->save();	
    	return redirect('/career')->with(['message' => 'Job Updated!','status' => 'success']);

    	

    	//$request->session()->flash('status', 'Task was successful!');
    	//return redirect('/career')->with(['message' => 'Job Updated!','status' => 'success']);



    }
}
