<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $fillable = [
        'countryid', 'personalcode', 'promocode', 'description',
        'link', 'size', 'color',
        'count','price', 'lastprice','isexpress', 'status'
    ];

    public static function add($fields)
    {
        // dd($fields);
        $invoice = new static;
        $invoice->fill($fields);
        $invoice->save();

        return  $invoice;
    }
    //
}
