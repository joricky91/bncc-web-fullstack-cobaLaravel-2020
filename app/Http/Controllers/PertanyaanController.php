<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index() {
        $questions = DB::table('questions')->select('id', 'title', 'content')->get();

        return view ('index', ['questions'=>$questions]);
    }

    public function createPertanyaan(){
        return view('createPertanyaan');
    }

    public function store (Request $req) {
        DB::table('questions')->insert([
            'id' => $req->id,
            'title' => $req->title,
            'content' => $req->content,
            'profile_id' => $req->profile_id
        ]);
        return redirect ('/pertanyaan');
    }

    public function edit($id) {
        $questions = DB::table('questions')->where('id', $id)->get();

        return view('edit', ['questions' => $questions]);
    }

    public function update(Request $request){
        DB::table('questions')->where('id', $request->id)->update([
            'id' => $request->id,
            'title' => $request->title,
            'content' => $request->content,
            'profile_id' => $request->profile_id
        ]);

        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        DB::table('questions')->where('id', $id)->delete();

        return redirect('pertanyaan');
    }

    public function show($id) {
        $questions = DB::table('questions')->where('id', '=', 2)->get();

        return view('show', ["questions" => $questions]);
    }
}
