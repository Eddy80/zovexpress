<?php

namespace App\Http\Controllers;

use App\Price;
use Illuminate\Http\Request;


class PriceController extends Controller
{

    public static function getList()
    {
        return Price::all();
    }

    public function calculate(Request $request){

        $fromcountry = $request->query('fromcountry');
        $sendcountry = $request->query('sendcountry');
        $count = $request->query('count');
        $weight = $request->query('weight');

        $target = Price::where('from_country_id', $fromcountry)->where('to_country_id', $sendcountry)->take(1)->get();

        $price = $target[0]->price_usd *  $weight;
        return $price;



    }
}
