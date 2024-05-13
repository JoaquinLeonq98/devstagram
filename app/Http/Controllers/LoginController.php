<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // Show the login form
    public function index(){
        return view('auth.login');
    }

    // Authenticate the user
    public function store(Request $request){
        // Validate the user
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Redirect back if validation fails
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Redirect back if user is not authenticated
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('message', 'Invalid login credentials');
        }

        // Redirect to the user's posts is required auth() & user()
        return redirect()->route('posts.index', auth()->user());
    }
}
