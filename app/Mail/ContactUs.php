<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contact;


    public function __construct()
    {
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->from($request->email)
            ->to(env("MAIL_FROM_ADDRESS"))
            ->view('mail.imjob.contact', ['data' => $request]);
    }
}
