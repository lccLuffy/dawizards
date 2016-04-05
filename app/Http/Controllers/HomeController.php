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

        /* Mail::send('email.pass', [], function ($message) {
             $message->to('528360256@qq.com', 'DA wizards')->subject('Welcome!');
         });*/
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
        //return redirect('/')->withErrors('暂未开启报名，敬请期待!');
        return view('join');
    }

}
