<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Join;
use App\Log;
use App\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $joins = Join::all();
        $info = [];
        $info['count'] = Join::count();
        $info['ios'] = Join::where('choose', 'IOS开发')->count();
        $info['android'] = Join::where('choose', '安卓开发')->count();
        $info['web'] = Join::where('choose', 'WEB开发')->count();
        $info['game'] = Join::where('choose', '游戏制作')->count();
        $info['comic'] = Join::where('choose', '动漫制作')->count();
        $info['paint'] = Join::where('choose', '美工')->count();
        return view('admin.index', compact('joins', 'info'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function logs()
    {
        $logs = Log::all();
        return view('admin.logs', compact('logs'));
    }
}
