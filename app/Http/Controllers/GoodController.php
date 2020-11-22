<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\GoodPicController;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($catid)
    {
        $goods = Good::where('catid', $catid)->get();

        foreach($goods as $good){
            $GoodPicControl = new GoodPicController();

            $good->mainPicture = $GoodPicControl->getMain($good->id);
        }

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        // dd($goodCats);

        return view('tascogoods')->with('goods', $goods)->with('goodCats', $goodCats);
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
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function show(Good $good)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function edit(Good $good)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Good $good)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        //
    }

    public static function getList()
    {
        $goods =  Good::all();  // last 9

        foreach($goods as $good){
            $GoodPicControl = new GoodPicController();

            $good->mainPicture = $GoodPicControl->getMain($good->id);
        }

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        // dd($goodCats);

        return view('tascogoods')->with('goods', $goods)->with('goodCats', $goodCats);
    }


    
    public static function getCount()
    {
        return Good::count();
    }


    public function viewGood(Request $request, $id){

       // dd($request);

        $good = Good::find($id);
        $price = strval($good->price);
        
        if (strpos($price, '.')==false){
            $price .= ".00";
           
        } else {
            $pos = strpos($price, '.');
            $len = strlen($price);

            if ( ($len-$pos) == 1){
            $price .="0";
            }
        }
        
        $good->price = $price;

        $GoodPicControl = new GoodPicController();

        $goodPics = $GoodPicControl->index($good->id); 

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        return view('tascogood')->with('good', $good)->with('goodPics', $goodPics)->with('goodCats', $goodCats);
    }
     
    public function viewForEditGood(Request $request, $id){
        $good = Good::find($id);
        return view('root.tascogood')->with('good', $good);
    }
}
