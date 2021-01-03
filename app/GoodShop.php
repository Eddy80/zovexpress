<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodShop extends Model
{
    protected $fillable = [
        'shopcatid', 'shopcountryid', 'title', 'titleru',
        'titleen','titlech','titlekz', 'titlekg', 'titletr',
        'titletc','ownerid','shoplogotip', 'instagramlink', 'facebooklink',
        'web','phone','phone2', 'email'
        
    ];


    public static function add($fields)
    {
        //dd($fields);
        $GoodShop = new static;
        $GoodShop->fill($fields);
        $GoodShop->save();

        return  $GoodShop;
    }
}
