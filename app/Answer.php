<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = ['content', 'question_id', 'profile_id'];

    public function quest(){
        return $this->belongsTo('App\Question', 'question_id', 'id');
    }

    public function answer(){
        return $this->belongsTo('App\Question', 'correct_answer_id', 'id');
    }
}
