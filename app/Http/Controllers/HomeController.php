<?php

namespace App\Http\Controllers;

use App\Models\Cat;
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
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home', [
        //     "cats" => Cat::select('*')
        //     ->get(),
        //     "chat" => Cat::select('*')
        //     ->get(),
        // ]);

        return view('cat', [
            "cats" => Cat::all()
        ]);
    }
}
