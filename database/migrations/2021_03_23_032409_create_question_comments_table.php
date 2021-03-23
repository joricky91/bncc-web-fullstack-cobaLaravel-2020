<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_comments', function (Blueprint $table) {
            $table->id();
            $table->string('content', 255);
            $table->unsignedBigInteger('questions_id');
            $table->unsignedBigInteger('profile_id');
            $table->timestamps();
        });

        Schema::table('question_comments', function (Blueprint $table) {
            $table->foreign('questions_id')->references('id')->on('questions');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_comments');
    }
}
