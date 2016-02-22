<?php

namespace App\Http\Controllers;

use App\Choice;
use App\Http\Requests;
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
        $this->middleware('auth',['except'=>['create','store']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('choose');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'option'=>'required',
            'stu_num'=>'required'
        ],[
            'option.required'=>'选项不能为空',
            'stu_num.required'=>'学号不能为空'
        ]);

        if(!in_array($request['stu_num'],config('dawizards.stu_nums')))
        {
            return back()->withInput()->withErrors('学号不正确');
        }
        Choice::create([
            'user_info'=>$request['stu_num'],
            'name'=>'调查',
            'value'=>$request['option'],
        ]);
    }
}
