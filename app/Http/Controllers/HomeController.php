<?php

namespace App\Http\Controllers;

use App\Choice;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        $this->validate($request, [
            'option' => 'required',
        ], [
            'option.required' => '选项不能为空',
        ]);


        $user = $request->user();

        if ($user->choices()->where('type', $request['type'])->count() > 0) {
            $choice = $user->choices()->where('type', $request['type'])->first();
            $choice->value = $request['option'];

            if ($choice->save()) {
                return back()->withInput()->withSuccess('修改成功');
            } else {
                return back()->withInput()->withErrors('修改失败');
            }
        }

        $choice = Choice::create([
            'name' => '调查',
            'type' => $request['type'],
            'value' => $request['option'],
        ]);

        if ($user->choices()->save($choice)) {
            return back()->withInput()->withSuccess('提交成功');
        } else {
            return back()->withInput()->withErrors('提交失败');
        }
    }

    public function admin()
    {
        if (!isAdmin(Auth::user())) {
            abort(403);
        }
        $choices = Choice::orderBy('value', 'desc')->get();

        return view('admin.index', compact('choices'));
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
        $user = Auth::user();
        $user_info = json_decode($user->stu_info);
        return view('join')->with(compact('user', 'user_info'));
    }

}
