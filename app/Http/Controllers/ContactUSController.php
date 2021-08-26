<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Session;

class ContactUSController extends Controller
{
    public function contact(ContactUsRequest $request)
    {

        // Mail::send(new ContactUs($request));
        $request->session()->flash('mailSent', 'Message Sent!');
        return redirect()->back();
    }
}
