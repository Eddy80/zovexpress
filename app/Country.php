<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{

    protected $fillable = [
        'id', 'name', 'nameru', 'nameen','shortname', 'avatar'
    ];

    protected $hidden = [
        'remember_token',
    ];



    public static function add($fields)
    {
        $country = new static;
        $country->fill($fields);
        // $payment->user_id = $user->getUserId();
        $country->save();

        return $country;
    }
}

