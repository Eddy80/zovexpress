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


    public  function getCountryInfo(Request $request){



       // $countryid = $request->get('countryid');
        return 99 ; //Country::all()->find('id', $countryid)->get('inforu');
    }

    public static function getListWithoutCodesCheck()
    {
        //$myid = Auth::user()->id;
        //$countries = Country::where('approved', 1)->get();

        $countries = DB::table("countries")->select('id','nameru')->get();

        return $countries;
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

    public static function getInfoByIds($countryid, $id)
    {
        //$myid = Auth::user()->id;
        //$countries = Country::where('approved', 1)->get();

        $countryinfoname = DB::table("countriesinfo")->where('countryid',$countryid)->orWhere('infoid',$id)->get();

        return $countryinfoname;
    }


    public static function getFlag($countryid)
    {
        $target = Country::where('id', $countryid)->take(1)->get();
        //dd($target);
        return $target[0]->avatar;
    }
}
