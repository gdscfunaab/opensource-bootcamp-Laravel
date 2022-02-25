<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(Request $request) {
        //validate the user
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required|confirmed',
            'email' => 'required|email|max:255',
        ]);

        //store user
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email, 
        ]);

        //redirect
        return redirect()->route('login');
    }
}
