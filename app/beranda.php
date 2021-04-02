<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    public function program()
    {
        return $this->hasOne('App\program','beranda_id','id');
    }
}
