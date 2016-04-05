<?php

namespace App\Http\Controllers;

use App\Choice;
use App\Http\Requests;
use App\Join;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class JoinController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin', ['only' => ['destroy', 'sendEmail']]);
        $this->middleware('auth', ['only' => ['destroy', 'sendEmail']]);
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
                'option_id' => $join->id,
                'user_id' => request()->user()->id,
                'content' => request()->user()->name . '成功删除' . $join->name . '的报名表',
            ]);
            return back()->with('success', '成功删除' . $join->name . '的报名表');
        }
        Log::create([
            'option_id' => $join->id,
            'user_id' => request()->user()->id,
            'content' => request()->user()->name . '删除' . $join->name . '的报名表失败',
        ]);
        return back()->withErrors('删除' . $join->name . '的报名表失败');
    }

    public function sendEmail(Request $request)
    {
        $content = $request['content'];
        $addr = $request['address'];
        $name = $request['name'];
        if (Choice::where('value', $addr)->count() > 0) {
            $data = Choice::where('name', 'send-email')->lists('value')->toArray();
            return back()->withErrors('已经发过了')->with(compact('data'));
        }

        Mail::raw($content, function (Message $message) use ($addr, $name) {
            $message->from('13402809589@163.com', 'DA wizards');
            $message->to($addr)->subject('DA wizards：' . $name . ',恭喜你可以面试了!');
        });

        Log::create([
            'user_id' => request()->user()->id,
            'content' => request()->user()->name . '发送邮件给' . $addr . "[$name]",]);
        Choice::create(['name' => 'send-email', 'value' => $addr]);
        $data = Choice::where('name', 'send-email')->lists('value')->toArray();
        return back()->with('success', '发送成功,' . $addr . " [ $name ]")->with(compact('data'));

    }
}
