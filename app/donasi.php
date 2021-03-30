<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    
    public function program()
    {
        return $this->hasMany('App\program','program_id','id');
    }
}
