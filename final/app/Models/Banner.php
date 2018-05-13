<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['product_id', 'title', 'description', 'price', 'small_text', 'picture', 'enabled'];

    public function products(){
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
