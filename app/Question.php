<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";

    protected $fillable = ['id', 'title', 'content', 'profile_id', 'correct_answer_id'];

    public function Profile(){
        return $this->belongsTo('App\User', 'profile_id', 'id');
    }

    public function answer(){
        return $this->hasMany('App\Answer', 'question_id', 'id');
    }

    public function correct(){
        return $this->hasOne('App\Answer', 'correct_answer_id', 'id');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag', 'question_tags', 'question_id', 'tag_id');
    }
}
