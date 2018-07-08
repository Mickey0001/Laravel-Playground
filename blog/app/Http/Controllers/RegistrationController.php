<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{

    protected $fillable = array('name', 'email', 'password');

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
        dd(auth()->id())

        // Auth::user()->id
;
        //Redirect to home

        return redirect()->home();

    }
}
