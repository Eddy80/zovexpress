<?php

namespace App\Http\Controllers;

use App\Codes;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'userid'=> 'required',
            'code'=> 'required'

        ]);

        $code = Codes::add($request->all());
        //return redirect('/login');
    }
}
