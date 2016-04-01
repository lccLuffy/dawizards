<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Join extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['stu_num', 'name', 'major', 'email', 'hasLearned', 'experience', 'wantLearn', 'brainColor', 'choose',];


    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
