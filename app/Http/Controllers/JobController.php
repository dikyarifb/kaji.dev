<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Mail;
use App\Mail\JobApply;

class JobController extends Controller
{

	public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
    	
    }
    public function sendApplyMail(Request $request)
    {
    	$validMime = [
		  'application/zip', // zip
		  'application/octet-stream', // zip, rar
		  'application/x-rar-compressed', // rar
		  'application/pdf', // pdf
		  'x-pdf', // pdf
		  'application/msword', // doc
		  'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // docx
		  'application/vnd.ms-excel', // xls
		  'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // xlsx
		  'text/csv' // csv
		];
    	$this->validate($request, [
        	'name' => 'required|max:255',
        	'email' => 'required|max:255',
        	'pdf_file' => 'required|mimes:zip,rar,pdf,doc,docx|max:5000',
            'g-recaptcha-response' => 'required|recaptcha',
    	]);
    	if($request->hasFile('pdf_file'))
    	{
		   		  			
	    	$path = $request->pdf_file->path();

	    	Mail::to(config('mail.recevient'))->send(new jobApply($request,$path));

	    	
	    	return redirect()->back()->with(['message' => 'Successfully applied! we will make sure to keep in touch in the future.','status' => 'success']);
		    

    	}
    	else
    	{
    		return redirect()->back()->with(['message' => 'Please input your resume file!','status' => 'danger']);
    	}

    }
}
