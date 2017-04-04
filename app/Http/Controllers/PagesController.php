<?php

namespace App\Http\Controllers;
use App\career;
use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMessage;


class PagesController extends Controller
{

    public function index()
    {
        return view('pages.home');
    }

    public function jobs()
    {
    	$career = career::All();

    	return view('pages.job', compact('career'));
    
    }

    public function jobDetail($name)
    {
    	$name = str_replace('-', ' ', $name);
    	$career = career::where('name', $name)->first();

    	return view('pages.jobDetail',compact('career'));
    }
    public function applyJob($name)
    {
        $dashName = str_replace('-',' ', $name);

        return view('pages.applyjob', compact('dashName'));
        
    }
    public function sendPesans(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255',
            'nama' => 'required|max:255',
            'pesan' => 'required|max:255',
        ]);
        Mail::to(config('mail.recevient'))->send(new sendMessage($request));

            
            return redirect()->back()->with(['message' => 'Message successfully sent!','status' => 'success']);
    }
}
