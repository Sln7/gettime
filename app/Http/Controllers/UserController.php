<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function start()
    {
        return view('user.start');
    }
    public function time()
    {
        return view('user.time');
    }
    public function ready()
    {
        return view('user.ready');
    }

    public function end()
    {
        return view('user.end');
    }
}
