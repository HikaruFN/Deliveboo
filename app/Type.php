<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
        'cover'
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
