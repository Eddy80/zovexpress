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
        //dd($request);
        $fromcountry = $request->query('fromcountry');
        $sendcountry = $request->query('sendcountry');
        $countryinfoid = $request->query('countryinfoid');
        //$count = $request->query('count');
        $weight = $request->query('weight');

       // return $fromcountry.' '.$sendcountry.' '.$countryinfoid.' '.$weight;

        $target = Price::where('from_country_id', $fromcountry)->where('to_country_id', $sendcountry)->take(1)->get();

        //dd($target);

       // return $target;
        if ($target[0]->price_usd > 0)
           $price = $target[0]->price_usd *  $weight;
        else $price = -1;

        return $price;



    }
}
