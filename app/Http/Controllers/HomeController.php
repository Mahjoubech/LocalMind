<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {
        $qst = Question::orderBy('created_at', 'desc');

        if (request()->has('search')) {
            $search = request()->get('search', '');

            $qst = $qst->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('location', 'like', '%' . $search . '%')
                      ->orWhere('content', 'like', '%' . $search . '%')
                      ->orWhere('name','like','%'.$search.'%');
            });
        }

        return view('Home', ['qst' => $qst->paginate(3)]);
    }
}


