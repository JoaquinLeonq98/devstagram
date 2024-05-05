<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        // Validate the user
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:30|min:4',
            'username' => 'required|unique:users|min:3|max:25',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:8|max:30',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    }
}
