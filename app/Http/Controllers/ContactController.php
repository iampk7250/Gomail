<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
 public function show()
    {
        return view('contact');
    }   
 public function store()
    {
    
    Mail :: raw('It works!', function($message){
       $message->to(request('email')) 
             ->subject('Hello There');
             
    });
    
      return redirect('/contact')
         ->with('message', 'Email sent!');
    }
}
