<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dish extends Model
{
    protected $fillable = [
        'name',
        'description', 
        'price',
        'visibility',
        'category_id',
        'user_id'
    ];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
