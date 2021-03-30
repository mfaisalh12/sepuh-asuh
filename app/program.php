<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    public function donasi()
    {
        return $this->belongsTo('App\donasi','donasi_id','id');
    }
}
