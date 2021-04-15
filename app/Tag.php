<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['id', 'tag', 'question_id'];

    public function question_tag(){
        return $this->belongsToMany('App\Question');
    }
}
