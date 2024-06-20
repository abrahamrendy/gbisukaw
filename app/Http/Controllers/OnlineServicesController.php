<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineServicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('online_services', ['title'=>"Online Services"]);
    }
}
