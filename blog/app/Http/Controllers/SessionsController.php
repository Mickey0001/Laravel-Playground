<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __constructor()

    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()

    {
        return view('sessions.create');
    }


    public function store()

    {
        //Try to auth the user

        if (! auth()->attempt(request(['email', 'password']))) {

            return back()->withErrors([

                'message' => 'Check your credentials please.'
            ]);
        }

        //Return to home page

        return redirect()->home();

    }


    public function destroy()

    {
        auth()->logout();

        return redirect()->home();
    }
}
