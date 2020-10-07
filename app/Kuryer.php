<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuryer extends Model
{
    protected $fillable = [
        'targetcountryid', 'targetregionname', 'personalcode', 'targetphone1',
        'targetphone2','targetaddress','posilkacount', 'lastprice', 'userid'
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
