<?php

namespace App\Http\Controllers;

use App\Good;
use App\GoodPic;
use Illuminate\Http\Request;
use App\Http\Controllers\GoodPicController;
use App\Http\Controllers\DB;



class GoodController extends Controller
{

    private $itemsPerPage = 9;


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($catid)
    {
        
        $goods = Good::where('catid', $catid)->paginate($this->itemsPerPage);

        foreach($goods as $good){
            $GoodPicControl = new GoodPicController();

            $good->mainPicture = $GoodPicControl->getMain($good->id);
        }

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        // dd($goodCats);

        return view('tascogoodspagination')->with('goods', $goods)->with('goodCats', $goodCats);
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

    public function getList()
    {
       
        $goods =  Good::paginate($this->itemsPerPage);  // last 9

        foreach($goods as $good){
            $GoodPicControl = new GoodPicController();

            $good->mainPicture = $GoodPicControl->getMain($good->id);
        }

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        // dd($goodCats);

        return view('tascogoodspagination')->with('goods', $goods)->with('goodCats', $goodCats);
    }

    public  function getListPaginated(Request $request)
    {   

        $goods =  Good::paginate($this->itemsPerPage);  // last 9

        foreach($goods as $good){
            $GoodPicControl = new GoodPicController();

            $good->mainPicture = $GoodPicControl->getMain($good->id);
        }

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        
        $count = 1;
        
        $show = '<div style="display:inline-block; width:100%;padding:0px;">';



        foreach($goods as $good){
        if ($count%3==0)  $padding = "0"; else  $padding =  "22";
        $show.='<a href="/tascogood/'.$good->id.'" target="blank">
        <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;
        margin-right:'.$padding.'px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
            <div> 
                <img src="'.$good->mainPicture.'" 
                style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; 
                height:160px;" />
                <a href="#">
                <img src="/assets/img/bg/instagram_icon.png" 
                style="position:relative; top:-150px; left:-60px;z-index:10;" />
                </a>
            </div>
            <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;
            margin-top:-25px;margin-bottom:5px;">'.$good->titleru.'</div>
            <div style="display:inline-block; width:100%;">
                <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;
                text-align:left;">'.$good->price.'</div>
                <div style="float:right;width:40%;">
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_gray.png"/>
                </div>
            </div>
            <div style="display:inline-block; width:100%;">
                <div style="float:left;width:20%;"><img src="/assets/img/bg/heard_gray.png" /></div>
                <div style="float:left;width:20%;"><img src="/assets/img/bg/share_gray.png" /></div>
                <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;
                padding-right: 6px;">Awatch Store</div>
            </div>          
        </div>
        </a>';
        
        $count++;
        }       
            
        $show .='</div>';



        if ($goods->total()> $goods->count()){
        $show .='<div style="width:100%;padding:20px 28%; text-align:center;">
        <div style="border-radius:10px;width:250px; height:40px;padding-top:5px;padding-left:10px;
                    background-color:#F0F0F3; text-align:center; font-size:12px;font-weight:bold;">';
  
        $show .=  $goods->links('pagination');
           
        $show .='</div>
        </div>';
        }


        return $show;
       
        
    }


    public  function getListCatidPaginated(Request $request, $catid )
    {   
    
        $goods = Good::where('catid', $catid)->paginate($this->itemsPerPage);
   

        foreach($goods as $good){
            $GoodPicControl = new GoodPicController();

            $good->mainPicture = $GoodPicControl->getMain($good->id);
        }

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();

        
        $count = 1;
        
        $show = '<div style="display:inline-block; width:100%;padding:0px;">';



        foreach($goods as $good){
        if ($count%3==0)  $padding = "0"; else  $padding =  "22";
        $show.='<a href="/tascogood/'.$good->id.'" target="blank">
        <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;
        margin-right:'.$padding.'px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
            <div> 
                <img src="'.$good->mainPicture.'" 
                style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; 
                height:160px;" />
                <a href="#">
                <img src="/assets/img/bg/instagram_icon.png" 
                style="position:relative; top:-150px; left:-60px;z-index:10;" />
                </a>
            </div>
            <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;
            margin-top:-25px;margin-bottom:5px;">'.$good->titleru.'</div>
            <div style="display:inline-block; width:100%;">
                <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;
                text-align:left;">'.$good->price.'</div>
                <div style="float:right;width:40%;">
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_orange.png"/>
                    <img src="/assets/img/bg/Star_gray.png"/>
                </div>
            </div>
            <div style="display:inline-block; width:100%;">
                <div style="float:left;width:20%;"><img src="/assets/img/bg/heard_gray.png" /></div>
                <div style="float:left;width:20%;"><img src="/assets/img/bg/share_gray.png" /></div>
                <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;
                padding-right: 6px;">Awatch Store</div>
            </div>          
        </div>
        </a>';
        
        $count++;
        }       
            
        $show .='</div>';



        if ($goods->total()> $goods->count()){
        $show .='<div style="width:100%;padding:20px 28%; text-align:center;">
        <div style="border-radius:10px;width:250px; height:40px;padding-top:5px;padding-left:10px;
                    background-color:#F0F0F3; text-align:center; font-size:12px;font-weight:bold;">';
  
        $show .=  $goods->links('pagination');
           
        $show .='</div>
        </div>';
        }


        return $show;
       
        
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

        $pricemany = strval($good->pricemany);
        if (strpos($pricemany, '.')==false){
            $pricemany .= ".00";
        } else {
            $pos = strpos($pricemany, '.');
            $len = strlen($pricemany);
            if ( ($len-$pos) == 1){
            $pricemany .="0";
            }
        }        
        $good->pricemany = $pricemany;

        $GoodPicControl = new GoodPicController();

        $goodPics = $GoodPicControl->index($good->id); 

        $goodCatController = new GoodCatController();
        $goodCats = $goodCatController->index();
        
        $shopGoodlist = $this->findByShopId($good->shopid);
       // dd($shopGoodlist);
        return view('tascogood')->with('good', $good)->with('shopgoods', $shopGoodlist)->with('goodPics', $goodPics)->with('goodCats', $goodCats);
    }
     
    public function viewForEditGood(Request $request, $id){
        $good = Good::find($id);
        return view('root.tascogood')->with('good', $good);
    }

    function findByShopId($shopid){
        $shopGoodPics = [];
        $shopGoods = Good::where('shopid', $shopid)->take(4)->get();
       // dd($shopGoods);
        
        foreach($shopGoods as $shopGood){
           $goodPics = GoodPic::where('goodid', $shopGood->id)->where('ismain', 1)->select('path','filename')->get();
            array_push($shopGoodPics, $goodPics); 
        }
        return $shopGoodPics;
        
        //return $shopGoods;
    }
}
