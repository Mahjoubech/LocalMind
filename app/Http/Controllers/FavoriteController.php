<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\User;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the authenticated user's favorite questions.
     */

     public function index()
     {
         // Ensure the user is authenticated
         $user = Auth::user();

         // Retrieve user's favorite questions with the related question data
         $favorites = $user->favorites()->with('User')->paginate(10);

         // Return the favorite page
         return view('favorite', compact('favorites'));
     }

    /**
     * Store a newly added question to favorites.
     */
    public function store(Request $request)
    {
        // Validate the incoming request, ensuring 'question_id' exists in the questions table
        $data = $request->validate([
            'question_id' => 'required|exists:questions,id',
        ]);

        $user = Auth::user();

        // Attach the question if it's not already in favorites
        if (!$user->favorites->contains($data['question_id'])) {
            $user->favorites()->attach($data['question_id']);
        }

        return redirect()->back()->with('success', 'Question added to favorites.');
    }

    /**
     * Display the details of a single favorite question.
     */
    public function show($question_id)
    {
        // Retrieve the question or fail if not found
        $question = Question::findOrFail($question_id);

        // You may use the same 'favorite' view or a separate one for single question details.
        // Here we pass the single question as 'question'.
        return view('favorite', compact('question'));
    }

    /**
     * Remove a question from the authenticated user's favorites.
     */
    public function destroy($question_id)
    {
        $user = Auth::user();

        // Detach the question from the user's favorites
        $user->favorites()->detach($question_id);

        return redirect()->back()->with('success', 'Question removed from favorites.');
    }
}
