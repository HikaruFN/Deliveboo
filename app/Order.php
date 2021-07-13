<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'address',
        'status',
        'payment_total',
    ];

    public function dishes() {
        return $this->belongsToMany(Dish::class);
    }
}
