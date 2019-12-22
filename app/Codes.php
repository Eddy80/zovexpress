<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{

    protected $fillable = [
        'userid', 'code'
    ];

    public static function add($fields)
    {
        $code = new static;
        $code->fill($fields);
        $code->save();

        return $code;
    }
}
