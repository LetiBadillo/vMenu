<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = ['name', 'last_name', 'email', 'age', 'bloodtype', 'weight', 'alergies', 'chronic', 'donate'];

    protected $appends = ['bloodName'];
    
    /**
     * Relationship
     */
    public function consultation(){
        return $this->hasMany('App\Models\Consultation');
    }
    public function getbloodNameAttribute()
    {
        switch ($this->bloodtype) {
            case '1':
                return "A+";
                break;
            case '2':
                return "A-";
            break;
            case '3':
                return "B+";
            break;
            case '4':
                return "B-";
                break;
            case '5':
                return "O+";
            break;
            case '6':
                return "O-";
            break;
            case '7':
                return "AB+";
            break;
            case '8':
                return "AB-";
            break;
            
            default:
                return "No seleccionado";
                break;
        }
    }
}
