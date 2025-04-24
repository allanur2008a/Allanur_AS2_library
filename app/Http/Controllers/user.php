<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function home()
    {
        return view('user.home');
    }
}
