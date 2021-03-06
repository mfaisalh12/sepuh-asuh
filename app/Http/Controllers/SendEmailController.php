<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('tentang');
    }

    function send(Request $request)
    {

        $data = [
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'message'   =>  $request->message
        ];

     Mail::to('zicsjhon@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

?>