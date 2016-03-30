<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Join;
use App\User;

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
        return view('admin.index', compact('joins'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}
