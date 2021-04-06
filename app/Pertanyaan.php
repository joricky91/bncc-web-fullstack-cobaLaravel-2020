<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "questions";
    protected $fillable = ['id', 'title', 'content', 'profile_id'];
}