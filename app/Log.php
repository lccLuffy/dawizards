<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['content', 'user_id', 'option_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
