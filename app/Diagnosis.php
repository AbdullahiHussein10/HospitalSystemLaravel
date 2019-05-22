<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function record()
    {
        return $this->belongsTo('App\Record');
    }

    
}
