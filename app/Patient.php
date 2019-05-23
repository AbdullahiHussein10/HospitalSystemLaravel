<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = "patients";
    
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'address',
        'gender',
        'phone_number',
        
    ];
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function diagnosis()
    {
        return $this->hasOne('App\Diagnosis');
    }

    public function appointment()
    {
        return $this->hasOne('App\Appointment');
    }

    public function visit()
    {
        return $this->hasOne('App\Visit');
    }

    public function record()
    {
        return $this->hasOne('App\Record');
    }

    public function bill()
    {
        return $this->has0ne('App\Bill');
    }

    public function payment()
    {
        return $this->hasOne('App\Payment');
    }

    public function pharmacy()
    {
        return $this->belongsToMany('App\Pharmacy');
    }
}
