<?php

namespace App\Http\Controllers;

use App\Codes;
use Illuminate\Http\Request;
use Auth;

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
}
