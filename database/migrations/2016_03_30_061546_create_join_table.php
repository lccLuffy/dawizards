<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stu_num');
            $table->string('name');
            $table->string('major');
            $table->string('email');
            $table->text('hasLearned');
            $table->text('experience');
            $table->text('wantLearn');
            $table->text('brainColor');
            $table->string('choose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('joins');
    }
}
