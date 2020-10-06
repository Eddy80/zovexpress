<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;
use Auth;

class CourierController extends Controller
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
    public function createForm()
    {
        return view('courier');
    }

    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        Courier::add($data);

        return redirect('/courierslist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        //
    }


    public static function getList()
    {
        return Courier::all();
    }

    public static function getListbyuserid()
    {
        return Courier::all()->where('userid' , '=', Auth::user()->id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        $otpravka = Courier::findOrFail($request->id);



        $courier->edit($request->all());
  
        return view('root.courierlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $courier)
    {
        //
    }

    public function viewforeditcourier(Request $request, $id){



        $courier = Courier::find($id);
        //return $member->firstname;

        return view('root.courierdetails')->with('courier', $courier);
    }
}
