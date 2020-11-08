<?php

namespace App\Http\Controllers;

use App\Mail\emailsender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate(['email' => 'required|email', 'name' => 'required']);

        $name = request('name');
        $email = request('email');
        $name2 = request('name2');
        $phone = request('phone');
        $message = request('message');
        $message2 = request('message2');

        $data = array(
            'name'=>$name,
            'email'=>$email,
            'name2'=>$name2,
            'phone'=>$phone,
            'message'=>$message,
            'message2'=>$message2,
        );

        Mail::to('jansonandemma@gmail.com')->send(new emailsender($data));

        return redirect('/#footer')
            ->with('message', 'Email Sent! nice :)');
    }
}
