<?php

namespace App\Http\Controllers;

use App\Price;


class PriceController extends Controller
{

    public static function getList()
    {
        return Price::all();
    }
}
