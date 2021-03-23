<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesDislikesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes_dislikes_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('questions_id');
            $table->unsignedBigInteger('profile_id');
            $table->timestamps();
        });

        Schema::table('likes_dislikes_answers', function (Blueprint $table) {
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
        Schema::dropIfExists('likes_dislikes_answers');
    }
}
