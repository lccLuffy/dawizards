<?php

namespace App\Http\Controllers;

use App\Choice;
use App\Http\Requests;
use App\Join;
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
            'stu_num' => 'required',
            'name' => 'required',
            'major' => 'required',
            'email' => 'required',
            'hasLearned' => 'required',
            'experience' => 'required',
            'wantLearn' => 'required',
            'brainColor' => 'required',
            'choose' => 'required',
        ]);

        $join = Join::where('stu_num', $request->get('stu_num'))->first();

        if ($join) {
            if ($join->update($request->except('_token'))) {
                return redirect('/')->with('success', '修改成功，我们会及时通知您结果');
            }
        } else {
            if (Join::create($request->except('_token'))) {
                return redirect('/')->with('success', '感谢您的填写，我们会及时通知您结果');
            }
        }
        return redirect('/')->with('error', '提交失败');
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
        return view('join');
    }

}
