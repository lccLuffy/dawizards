<?php

namespace App\Http\Controllers;

use App\Choice;
use App\Http\Requests;
use App\Join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
     * {
     * $this->middleware('auth',['except'=>['create','store']]);
     * }
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view("about");
    }

    public function impress()
    {
        return view("impress");
    }

    public function join()
    {
        return view('join');
    }

}
