<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        
        User::create([
            'name'=> $request->name,
            'username'=> Str::slug($request->username), 
            'email'=> $request->email,
            // method bcrypt() is used to encrypt the password
            'password'=> bcrypt($request->password),  
        ]);

        // Authenticate the user
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        auth()->attempt($request->only('email', 'password'));


        return redirect()->route('post.index');
    }
}
