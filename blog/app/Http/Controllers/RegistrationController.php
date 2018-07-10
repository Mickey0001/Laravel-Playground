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

    public function store(RegistrationForm $form)

    {
        $form->persist();

        session()->flash('message', 'Thanks for registering.');

        return redirect()->home();
    
    }
}
