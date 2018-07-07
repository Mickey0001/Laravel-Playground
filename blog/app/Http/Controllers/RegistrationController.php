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

        //Create and store the user

        //Log them in

        //Redireac to home
    }
}
