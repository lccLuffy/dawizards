<?php

namespace App\Http\Controllers;

use App\Join;
use App\Log;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin', ['only' => 'destroy']);
        $this->middleware('auth', ['only' => 'destroy']);
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

    public function destroy(Join $join)
    {
        if ($join->delete()) {
            Log::create([
                'user_id' => request()->user()->id,
                'content' => request()->user()->name . '成功删除' . $join->name . '的报名表',
            ]);
            return back()->with('success', '成功删除' . $join->name . '的报名表');
        }
        Log::create([
            'user_id' => request()->user()->id,
            'content' => request()->user()->name . '删除' . $join->name . '的报名表失败',
        ]);
        return back()->withErrors('删除' . $join->name . '的报名表失败');
    }

}
