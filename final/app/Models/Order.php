<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total', 'status', 'time', 'enabled'];
    
    protected $table = 'orders';

    protected $appends = ['statusLabel', 'timeFormat'];

    public function getStatusLabelAttribute(){
        $label = '';
        switch ($this->status) {
            case '1':
                $label = 'En espera';
            break;
            case '2':
                $label = 'Orden tomada';
            break;
            case '3':
                $label = 'Entregada';
                break;
        }
        return $label;
    }

    public function getTimeFormatAttribute (){
        if($this->time != null){
            Carbon::setLocale('es');
            $myArray = explode(':', $this->time);
            return Carbon::createFromTime($myArray[0], $myArray[1], $myArray[2], 'America/Mexico_City')->diffForHumans();
        }else{
            return null;
        }
        
    }

    
        public function order_detail(){
            return $this->hasMany(OrderDetail::class, 'order_id');
        }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    

}
