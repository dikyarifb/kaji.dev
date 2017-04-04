<?php

namespace App\Mail;

use App\Mail\JobApply;
 use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JobApply extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $apply;


    public function __construct(Request $request,$path)
    {
        $this->request = $request;
        $this->path = $path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.apply')
                    ->attach($this->path)
                    ->with([
                        'name' => $this->request->name,
                        'email' => $this->request->email,
                        'posisi' => $this->request->posisi,
                        'pesan' => $this->request->pesan,
                        ]);
    }
}
