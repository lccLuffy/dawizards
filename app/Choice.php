<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'user_info', 'name','value',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
