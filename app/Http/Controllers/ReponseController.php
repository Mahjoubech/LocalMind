<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Question $qs)
    {

        $rpnse = new Reponse();
        $rpnse-> question_id = $qs->id;
        $rpnse->content = request()->get('content');
        $rpnse->user_id =Auth::id();
        $rpnse->save();
        return redirect()->route('Question.show',$qs -> id );
    }

    /**
     * Display the specified resource.
     */
    public function show(Reponse $reponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reponse $reponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reponse $reponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reponse $id)
    {
      $id->delete();

//  return redirect()->route('qstHome')->with('success','Question Deleted Success !') ;
    return redirect()->back();

    }
}
