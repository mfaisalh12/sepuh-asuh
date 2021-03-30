<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    public function donasi()
    {
        return $this->belongsTo('App\donasi','donasi_id','id');
    }
    public function beranda()
    {
        return $this->belongsTo('App\beranda','beranda_id','id');
    }
}
