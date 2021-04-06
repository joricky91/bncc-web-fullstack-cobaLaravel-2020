<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pertanyaan;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Pertanyaan::all();
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

        Pertanyaan::create([
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
        $questions = Pertanyaan::select('id', 'title', 'content')->where('id', 2)->get();
        return view('show', ['questions' => $questions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaan)
    {
        $questions = Pertanyaan::find($pertanyaan);
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

        $questions = Pertanyaan::find($id);
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
        $questions = Pertanyaan::find($pertanyaan);
        $questions->delete();
        return redirect('/pertanyaan');
    }
}
