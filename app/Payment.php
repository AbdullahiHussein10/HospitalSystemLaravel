<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function bill()
    {
        return $this->belongsTo('App\Bill');
    }
}
