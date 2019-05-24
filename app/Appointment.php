<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = [
        'doctors_id',
        'appointment_date',
        'appointment_time',
        'appointment_duration',
        'first_name',
        'last_name',
        'address',
    ];

    public function doctor()
    {
        return $this->hasOne('\App\Doctor', 'doctors_id');
    }

    public function visit()
    {
        return $this->belongsTo('\App\Visit');
    }
}
