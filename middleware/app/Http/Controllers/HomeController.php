<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // // $request->session->put(['mirza'=>'student']);
        // session(['mirza'=>'student']);

        // return session('mirza');

        // // $request->session()->all();
        // // $request->session()->get('mirza');
        // // return view('home');

        // $request->session()->flash('message', 'Post Create');

        // return $request->session()->get('message');

        $request->session()->reflash();
    }
}
