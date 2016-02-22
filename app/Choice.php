<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'name','value','type'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
