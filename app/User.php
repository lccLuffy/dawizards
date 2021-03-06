<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stu_num', 'password', 'stu_info', 'name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    public function logs()
    {
        return $this->hasMany('App\Log');
    }
}
