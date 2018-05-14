<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total', 'status', 'time', 'enabled'];
    
    protected $table = 'orders';

    protected $appends = ['statusLabel'];
    
        public function order_detail(){
            return $this->hasMany(OrderDetail::class, 'order_id');
        }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getstatusLabelAttribute(){
        $label = '';
        switch ($this->status) {
            case '1':
                $label = 'En espera';
            break;
            case '2':
                $label = 'Orden tomada';
            break;
            case '3':
                $label = 'Entregado';
                break;
        }
        return $label;
    }

}
