<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodPic extends Model
{
    protected $fillable = [
        'goodid', 'ismain', 'filename', 'fileNamesmall',
        'path', 'orderid', 
    ];



    public static function add($fields)
    {
       // dd($fields);
        $goodpic = new static;
        $goodpic->fill($fields);
        $goodpic->save();

        return  $goodpic;
    }
}
