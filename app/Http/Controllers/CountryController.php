<?php

namespace App\Http\Controllers;

use App\Country;
use Auth;
use Illuminate\Support\Facades\DB;




class CountryController extends Controller
{

    public static function getList()
    {
        return Country::all();
    }

    public static function getListWithCodesCheck()
    {
        //$myid = Auth::user()->id;
        //$countries = Country::where('approved', 1)->get();

        $countries = DB::table("countries")->select('id','nameru')->whereNotIn('id',function($query) {

            $myid = Auth::user()->id;

            $query->select('countryid')->from('codes')->where('userid', $myid );

        })->get();

        return $countries;
    }


    public static function getNameById($id)
    {
        //$myid = Auth::user()->id;
        //$countries = Country::where('approved', 1)->get();

        $countryname = DB::table("countries")->where('id',$id)->first();

        return $countryname;
    }


    public static function getFlag($countryid)
    {
        $target = Country::where('id', $countryid)->take(1)->get();

        return $target[0]->avatar;
    }
}
