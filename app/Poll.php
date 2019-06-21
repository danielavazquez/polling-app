<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function options()
    {
        return $this->hasMany('App\Option');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}