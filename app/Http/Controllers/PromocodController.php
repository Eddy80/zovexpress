<?php

namespace App\Http\Controllers;

use App\Promocod;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class PromocodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promocod  $promocod
     * @return \Illuminate\Http\Response
     */
    public function show(Promocod $promocod)
    {
        //
    }


    public function getpercent(Request $request)
    {
       // return 55;
       $data = $request->all();
       $promocod = $data['parameter'];
       //dd($promocod);
       //$promocod = $request['parameter'];
    
       //$percent = DB::table('promocods')->where('promocode', $promocod)->value('discountpercent');
       $percent = Promocod::where('promocode', $promocod)->pluck('discountpercent');
       //dd($percent[0]);
       return $percent[0];
/*
         $promocod = $request->promocod;
         return $promocod['promocode'];/*
        Console.log($promocod);
        // $percent = Promocod::where('promocode', $promocod)->pluck('discountpercent');


         $percents = Promocods::select('discountpercent')->where('promocode', $promocod)->get();


        return Response::json(array(
            'percent' => $percents,  
          ));
        //return $percent;*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promocod  $promocod
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocod $promocod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promocod  $promocod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocod $promocod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promocod  $promocod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocod $promocod)
    {
        //
    }
}
