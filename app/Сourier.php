<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Сourier extends Model
{
    protected $fillable = [
        'countryid', 'personalcode', 'count','price', 'lastprice','isexpress', 'status', 'userid'
    ];

    public static function add($fields)
    {
        //dd($fields);
        $courier = new static;
        $courier->fill($fields);
        $courier->save();

        return  $courier;
    }
}
