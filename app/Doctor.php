<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function patient()
    {
        return $this->hasMany('App\Patient');
    }

    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function visit()
    {
        return $this->hasMany('App\Visit');
    }
}
