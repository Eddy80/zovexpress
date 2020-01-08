<?php

namespace App\Http\Controllers;

use App\Codes;
use App\Country;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class CodesController extends Controller
{
    public function store(Request $request)
    {
      //  dd($request->all());
        $this->validate($request,[
            'userid'=> 'required',
            'code'=> 'required',
            'countryid'=> 'required'

        ]);

        $code = Codes::add($request->all());
        //return redirect('/login');
    }

    public static function getListByUserId()
    {
        $myid = Auth::user()->id;
        $codes = Codes::where('userid', $myid)->get();

        return $codes;
    }


    public static function getListByUserId2(Request $request)
    {
        $myid = $request->get('userid');
      /*  $codes = Codes::where('userid', $myid)->get(['id', 'code', function ($countryid) {
           $country =  Country::where('id', $countryid)->get('nameru');
           return $country;
        }]);*/

        /*$codes = DB::table('codes')
            //->join('countries', 'codes.countryid', '=', 'countries.id')
            //->select('users.id', 'users.code', 'countries.nameru')
            ->where('id','=',$myid)
            ->get(['id', 'code']);*/

        $codes =   DB::table('codes')
            ->rightJoin('countries', function ($join) {
                $join->on('codes.countryid', '=', 'countries.id');
            })->where('codes.userid','=',$myid)
            ->get();

        return $codes->all();
    }

}
