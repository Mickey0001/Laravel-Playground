<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //Validte the input

        $this->validate(request(), [

            'name' => 'name',

            'email' => 'email',

            'password' => 'password'

        ]);

        //Create and store the user

        User::create(request(['name', 'email', 'password']));

        //Log them in

        // \Auth::login();

        auth()->login($user);
;
        //Redirect to home

        return redirect()->home();

    }
}
