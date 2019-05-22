<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public function patient()
    {
        return $this->belongsToMany('App\Patient');
    }
}
