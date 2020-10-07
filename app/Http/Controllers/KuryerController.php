<?php

namespace App\Http\Controllers;

use App\Kuryer;
use Illuminate\Http\Request;
use Auth;

class KuryerController extends Controller
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
        return view('kuryer');
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
        $data = $request->all();
       //dd($data);
        Kuryer::add($data);

        return redirect('/courierslist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kuryer  $kuryer
     * @return \Illuminate\Http\Response
     */
    public function show(Kuryer $kuryer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kuryer  $kuryer
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuryer $kuryer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kuryer  $kuryer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuryer $kuryer)
    {
        $otpravka = Kuryer::findOrFail($request->id);

        $kuryer->edit($request->all());
  
        return view('root.kuryerlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kuryer  $kuryer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuryer $kuryer)
    {
        //
    }

    public function viewforeditcourier(Request $request, $id){

        $kuryer = Kuryer::find($id);
        //return $member->firstname;
        return view('root.kuryerdetails')->with('kuryer', $kuryer);
    }

    public static function getList()
    {
        return Kuryer::all();
    }

    public static function getListbyuserid()
    {
        return Kuryer::all()->where('userid' , '=', Auth::user()->id);
    }
}
