<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {
        $qst = Question::latest();

        if (request()->has('search')) {
            $search = request()->get('search', '');

            $qst = $qst->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('location', 'like', '%' . $search . '%')
                      ->orWhere('content', 'like', '%' . $search . '%');

            });
        }

        return view('Home', ['qst' => $qst->paginate(3)]);
    }
}


