<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'enabled', 'user_type', 'room', 'username'
    ];

    protected $appends = ['balance'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getBalanceAttribute(){
        $result = 0;
        foreach ($this->orders as $key => $order) {
            $result+= $order->total;
        }
        return $result;
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    function orders_detail(){
        return $this->hasManyThrough(OrderDetail::class, Order::class);
    }
}

