<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    //retrieve all drugs that belongs to specific diagnose
    public function drugs()
    {
        return $this->belongsToMany('App\Drug');
    }
    //retrieve all drugs that belongs to specific diagnose
    public function oral_radiologies()
    {
        return $this->hasMany('App\OralRadiology');
    }
    //retrieve all drugs that belongs to specific diagnose
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
    //retrieve the patient who has this diagnose
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
