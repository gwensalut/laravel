<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        return view('contacts');
    }
    public function submit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        return view('contactsout',[
            'message' => $message,
            'email'=>$email,
            'name'=>$name
        ]);
    }


    
}
