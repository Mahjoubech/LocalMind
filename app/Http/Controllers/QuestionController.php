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
    public function show(Question $qs)
    {
        return view('Question.show', ['qs' => $qs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $qs)
    {
        $editing = true;
        return view('Question.show', compact('qs','editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $qs)
    {

        $request->validate([
            'title'   => 'required|min:10|max:30',
            'content' => 'required|min:20|max:100',
        ]);

        $qs->update([
            'title'    => $request->title,
            'content'  => $request->content,
            'user_id'  => 1,
            'like'     => 2,
            'location' => 'Marrakech',
        ]);
        return redirect()->route('Question.show', $qs->id)
                         ->with('success', 'Question updated successfully!');
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
