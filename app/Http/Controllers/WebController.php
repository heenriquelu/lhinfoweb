<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendMail(Request $request)
    {

        $data = [
            'reply_name' => $request->name,
            'reply_email' => $request->email,
            'message' => $request->message,
        ];


        Mail::send(new Contact($data));
        //return new Contact($data);
        //var_dump($request->all());
    }
}
