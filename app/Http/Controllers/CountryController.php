<?php

namespace App\Http\Controllers;

use App\Country;


class CountryController extends Controller
{

    public static function getList()
    {
        return Country::all();
    }

    public static function getFlag($countryid)
    {
        $target = Country::where('id', $countryid)->take(1)->get();

        return $target[0]->avatar;
    }
}
