<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';


    public function doctor()
    {
        return $this->hasOne('\App\Doctor', 'doctors_id');
    }

    public function visit()
    {
        return $this->belongsTo('\App\Visit');
    }
    
    public function patient()
    {
        return $this->hasOne('App\Appointment');
    }
}
