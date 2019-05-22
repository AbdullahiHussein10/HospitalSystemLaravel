<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function visit()
    {
        return $this->hasOne('App\Visit');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function diagnosis()
    {
        return $this->hasOne('App\Diagnosis');
    }
}
