<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $request)
{
    $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::to($validatedData['email'])->send(new ContactFormMail($validatedData));

    return redirect()->back()->with('success', 'Your message has been sent!');


    }
}
