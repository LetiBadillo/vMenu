<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //
    protected $fillable = ['patient_id', 'description', 'diagnosed', 'next_date'];
    protected $dates = ['next_date'];

    /**
     * Relationships
     */
    public function patient(){
        return $this->belongsTo('App\Models\Patient', 'patient_id', 'id');
    }
}
