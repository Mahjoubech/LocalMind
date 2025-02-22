<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function show(User $user){
       $qstuser = $user->question()->paginate(3);
        return view('users.showProfile',compact('user','qstuser'));
    }
    public function edit(User $user){
        $editing = true;
       $qstuser = $user->question()->paginate(3);

        return view('users.showProfile',compact('user','editing','qstuser'));
    }
    public function update(){

    }

    public function profile(){

        $user =  Auth::user();
        return $this->show($user);
    }
}
