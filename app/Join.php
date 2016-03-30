<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    //

    protected $fillable = ['stu_num', 'name', 'major', 'email', 'hasLearned', 'experience', 'wantLearn', 'brainColor', 'choose',];
}
