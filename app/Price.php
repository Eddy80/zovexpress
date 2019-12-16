<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Price extends Model
{

    protected $fillable = [
        'user_id', 'amount', 'title', 'description', 'direction'
    ];

    protected $hidden = [
        'remember_token',
    ];



    public static function add($fields)
    {
        $price = new static;
        $price->fill($fields);
        $price->save();

        return $price;
    }
}

