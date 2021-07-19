<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name_on_card',
        'address',
        'email',
        'status',
        'amount',
    ];

    public function dishes() {
        return $this->belongsToMany(Dish::class);
    }
}
