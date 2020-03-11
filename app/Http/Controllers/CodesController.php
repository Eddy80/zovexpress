<?php

namespace App\Http\Controllers;

use App\Codes;
use App\Country;
use App\User;
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

    public static function getCodeByCodeId($codeid)
    {
        $code = Codes::where('id', $codeid)->get();
        return $code;
    }

    public static function getListByUserId()
    {
        $myid = Auth::user()->id;
        $codes = Codes::where('userid', $myid)->get();

        return $codes;
    }

    public static function getUserIdByCodeId(Request $request)
    {
        $myid = $request->codeid;
        $user = Codes::where('id', $myid)->take(1)->get();
        $userid = $user[0]->userid;
        $userfound = User::where('id', $userid)->get();

        return  $userfound;
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

    public static function getList()
    {
        return Codes::all();
    }

}
