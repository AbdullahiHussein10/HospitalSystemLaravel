<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function nurse()
    {
        return $this->hasMany('App\Nurse');
    }

    public function patient()
    {
        return $this->hasMany('App\Patient');
    }
}
