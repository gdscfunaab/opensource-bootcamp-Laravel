<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginControlller extends Controller
{
    public function index() {
        return view('login');
    }
}
