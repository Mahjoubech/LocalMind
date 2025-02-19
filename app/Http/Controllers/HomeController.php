<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {

        return view('Home', ['qst' => Question::orderBy('created_at','desc')->get()]);

    }
}
