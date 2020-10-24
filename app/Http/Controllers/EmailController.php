<?php

namespace App\Http\Controllers;

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
        $email = request('email');
        $name = request('name');
        $name2 = request('name2');
        $phone = request('phone');
        $message = request('message');
        $message2 = request('message2');

        request()->validate(['email' => 'required|email', 'name' => 'required']);

        Mail::send('It works!', function ($message) {

            $message->to('jansonandemma@gmail.com')

                ->subject('You have mail');
            });

        //dd($email, $name, $name2, $phone, $message, $message2);

        return redirect('/#footer')
            ->with('message', 'Email Sent! nice.');

        //$email = request('email');

        //dd($email);

        //return view('oldwelcome');
    }
}
