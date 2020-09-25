<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    public static function add($fields)
    {
        $invoice = new static;
        $invoice->fill($fields);
        $invoice->save();

        return  $invoice;
    }
    //
}
