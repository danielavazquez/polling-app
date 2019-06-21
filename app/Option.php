<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function poll()
    {
        return $this->belongsTo('App\Poll');
    }
}
