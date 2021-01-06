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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Setting the session
        // echo $request->session(['Ajibola' => 'Learner']);
        // $request->session()->get('Ajibola');
        // return $request->session();
        // \session()->get('Ajibola');
        // session(['Ridwan' => 'Student']);
        // $request->session()->put(['Ajibola' => 'Master Learner']);
        // return $request->session()->all();

        // Read the session 
        // \session(['Ajibola2' => 'Your Senior']);
        // return \session('Ajibola2');
        // Deleting from the session -- Method-1
        // \session()->forget('Ajibola');

        // Deleting from the session -- Method-2
        // $request->session()->forget('Ajibola2');

        // Delete all from the session --Method-1
        // \session()->flush();

        // Delete all from the session -- Method-2
        // $request->session()->flush();
        // return \session()->all();

        // Sending a flash message to the user
        // \session()->flash('message', 'Your request was received successfully');

        return \session()->get('message');

        // Another way of showing flash message
        \session()->reflash();
        \session()->keep('message');


        // return view('home');
    }
}
