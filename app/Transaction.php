<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // Eloquent ORM a patient who owns this transaction
    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }
}
