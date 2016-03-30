<?php

namespace App\Http\Controllers;

use App\Join;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!isAdmin(Auth::user())) {
            abort(403);
        }
        $joins = Join::all();

        return view('admin.index', compact('joins'));
    }
    public function users()
    {
        if (!isAdmin(Auth::user())) {
            abort(403);
        }
        $users = User::all();

        return view('admin.users', compact('users'));
    }
}
