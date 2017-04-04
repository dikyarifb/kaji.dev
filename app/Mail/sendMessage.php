<?php

namespace App\Mail;

use App\Mail\sendMessage;
 use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.sendMessage')
                    ->subject('New message from '. $this->request->nama)
                    ->with([
                        'email' => $this->request->email,
                        'nama' => $this->request->nama,
                        'pesan' => $this->request->pesan,
                        ]);
    }
}
