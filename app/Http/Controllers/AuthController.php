<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(){
        //validation
        //create user
        //redrect
        $validated = request()->validate([
              'name' => 'required|min:3|max:40',
              'email' => 'required|email|unique:users,email',
              'password' => 'required|confirmed',

        ]);

        User::create([
          'name' => $validated['name'],
              'email' => $validated['email'],
              'password' => Hash::make($validated['password'])
        ]);
        return redirect()->route('qstHome')->with('success','Account created Successfuly !!');
    }
}
