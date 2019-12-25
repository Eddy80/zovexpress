<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{

    protected $fillable = [
        'userid', 'code', 'countryid'
    ];

    public static function add($fields)
    {
       // dd($fields);
        $code = new static;
        $code->fill($fields);
        $code->save();

        return $code;
    }
}
