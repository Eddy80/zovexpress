<?php

namespace App\Http\Controllers;

use App\GoodShop;
use App\Country;
use App\GoodCat;
use Auth;
use Illuminate\Http\Request;

class GoodShopController extends Controller
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
        $countries = Country::all();
        $shopcats = GoodCat::all();
        return view('cabaddshop')->with('countries', $countries)->with('shopcats', $shopcats);
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
       /* if ( !isset($data['isexpress']) )
          $data['isexpress'] = 0;  
        else 
          $data['isexpress'] = 1;
  */

  $data['titleru'] = $data['shopname'];
  $data['shopcatid'] = $data['shopcat'];
  $data['shopcountryid'] = $data['country'];


          if (Auth::check())
          $data['ownerid'] = Auth::user()->id;
          else $data['ownerid'] = -1;
  
     /*
      $newdata = array('userid'=>Auth::user()->id);
      array_push($data, $newdata);
  
  var_dump($data);
  
  */

  

  $request->validate([
    //  'file' => 'required|mimes:pdf,xlx,csv|max:2048',
    'file' => 'required|mimes:jpeg,gif,png|max:2048',
  ]);

  $fileName = time().'.'.$request->file->extension();  
  $data['shoplogotip'] = $fileName;

  $path = '/assets/img/users/'.Auth::user()->id.'/shops/'.$data['shopname'].'/';

  //$request->file->move(public_path('uploads'), $fileName);
  $request->file->move(public_path($path), $fileName);
  //dd($data);
  GoodShop::add($data);
  
  return back()
      ->with('success','You have successfully upload file.')
      ->with('file',$fileName);


          
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoodShop  $goodShop
     * @return \Illuminate\Http\Response
     */
    public function show(GoodShop $goodShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoodShop  $goodShop
     * @return \Illuminate\Http\Response
     */
    public function edit(GoodShop $goodShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoodShop  $goodShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoodShop $goodShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoodShop  $goodShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoodShop $goodShop)
    {
        //
    }
}
