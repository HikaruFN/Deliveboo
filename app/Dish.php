<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'description', 
        'price',
        'visibility'
    ];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }
}
