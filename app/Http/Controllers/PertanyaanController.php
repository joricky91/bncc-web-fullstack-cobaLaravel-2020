<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Tag;
use App\Answer;
use App\User;

class PertanyaanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPertanyaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'profile_id' => 'required'
        ]);

            Question::create([
            'id' => $request->id,
            'title' => $request->title,
            'content' => $request->content,
            'profile_id' => $request->profile_id
        ]);

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::find($id);
        $answers = $questions->answer;
        $correct = Answer::find($questions['correct_answer_id']);
        $tags = $questions->tag;
        return view('show', ['questions' => $questions, 'answers' => $answers, 'correct' => $correct, 
        'tags' => $tags]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaan)
    {
        $questions = Question::find($pertanyaan);
        return view('edit', ['questions' => $questions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'profile_id' => 'required'
        ]);

        $questions = Question::find($id);
        $questions->id = $request->id;
        $questions->title = $request->title;
        $questions->content = $request->content;
        $questions->profile_id = $request->profile_id;
        $questions->save();

        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pertanyaan)
    {
        $questions = Question::find($pertanyaan);
        $questions->delete();
        return redirect('/pertanyaan');
    }
}
