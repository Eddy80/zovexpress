<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class General extends Model
{

    protected $fillable = [
        'id', 'text', 'textru', 'texten','shortname','shortnameru','shortnameen', 'categoryid', 'type', 'avatar'
    ];

    protected $hidden = [
        'remember_token',
    ];



    public static function add($fields)
    {
        $general = new static;
        $general->fill($fields);

        $general->save();

        return $general;
    }
}

