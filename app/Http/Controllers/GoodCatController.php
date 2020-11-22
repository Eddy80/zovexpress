<?php

namespace App\Http\Controllers;

use App\GoodCat;
use Illuminate\Http\Request;

class GoodCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GoodCat::all()->sortBy("orderid");
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
     * @param  \App\GoodCat  $goodCat
     * @return \Illuminate\Http\Response
     */
    public function show(GoodCat $goodCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoodCat  $goodCat
     * @return \Illuminate\Http\Response
     */
    public function edit(GoodCat $goodCat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoodCat  $goodCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoodCat $goodCat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoodCat  $goodCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodCat $goodCat)
    {
        //
    }
}
