<?php

namespace App\Http\Controllers;

use App\GoodPic;
use Illuminate\Http\Request;

class GoodPicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($goodid)
    {
        $goodPics = GoodPic::where('goodid', $goodid)->get();

        return $goodPics;
    }

    public function getMain($goodid)
    {
        if  (GoodPic::where('goodid', $goodid)->where('ismain',1)->count()>0){
        $goodPicsPath = GoodPic::where('goodid', $goodid)->where('ismain',1)->first()->path;
        $goodPicsFilename = GoodPic::where('goodid', $goodid)->where('ismain',1)->first()->filename;

        return $goodPicsPath.$goodPicsFilename;
        }
        else return '';
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
     * @param  \App\GoodPic  $goodPic
     * @return \Illuminate\Http\Response
     */
    public function show(GoodPic $goodPic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoodPic  $goodPic
     * @return \Illuminate\Http\Response
     */
    public function edit(GoodPic $goodPic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoodPic  $goodPic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoodPic $goodPic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoodPic  $goodPic
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodPic $goodPic)
    {
        //
    }
}
