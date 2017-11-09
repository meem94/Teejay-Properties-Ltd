<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Test extends Controller
{
    public function index()
    {
    	$data = []; // Empty array

		Mail::send('auth.passwords.email', $data, function($message)
		{
		    $message->to('rafikfarhad@gmail.com', 'Jon Doe')->subject('Welcome!');
		});
    	// Mail::to('rafikfarhad@gmail.com')
		    // ->send('hello world!');
    	return 23423;
    }
}
