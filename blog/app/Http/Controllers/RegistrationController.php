<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{

    protected $fillable = array('name', 'email', 'password');

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //Validte the input

        $this->validate(request(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed'

        ]);

        //Create and store the user

        $user = User::create(request(['name', 'email', 'password']));

        //Log the user in

        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    
    }
}
