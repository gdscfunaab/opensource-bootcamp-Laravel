<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginControlller extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        //sign a user in
        if(!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('status', 'Invalid login details');
        };

        
        //redirect to the dashboard
        return redirect()->route('dashboard');
    }
}
