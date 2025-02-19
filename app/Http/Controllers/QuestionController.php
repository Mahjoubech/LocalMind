<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store()
    {
        request()->validate([
            'title'=> 'required|min:10|max:30',
            'content'=>'required|min:30|max:100',
        ]);
        $qst =  Question :: create (
            [
                'title'=> request()->get('title'),
        'content'=>request()->get('content'),
        'user_id' => '1',
        'like' => 2,
        'location' => 'merrakch',
            ]
        );
        return redirect()->route('qstHome')->with('success','Question Created Success !') ;

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
    // public function dd(Request $request)
    // {
    //     dump();
    //     dump(request()->get('content'));

    // }
    /**
     * Display the specified resource.
     */
    public function show(request $request)
    {



        $qs =  Question :: find($request->qs);
        return view('Question.show', ['qs' => $qs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $id)
    {
      $id->delete();

    //   return redirect()->route('qstHome')->with('success','Question Deleted Success !') ;
    return redirect()->back();

    }
}
