<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_user extends Model
{
    protected $table = 'type_user';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'type_id'
    ];
}
