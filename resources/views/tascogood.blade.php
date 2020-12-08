@extends('tascohome')

@section('tascocontent')

<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\GoodController;
?>


                <div class="col-md-9 col-lg-7 item" style="padding:0px;"> 
                    <div class="tascoLeftMenu" style="padding:0px;">
                            
                        <div style="display:inline-block; width:100%;padding:0px; font-family:Roboto;">
                            <div style="width:100%">
                                <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:0px;margin-right:0px;width:274px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <?php $mainPicPath = null;$mainPicFilename = null; ?>
                                @foreach($goodPics as $goodPic)
                                    @if($goodPic->ismain==1)
                                    <div> 
                                        <img src="{{$goodPic->path.$goodPic->filename}}" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:100%; " />                                 
                                    </div>
                                    @endif
                                @endforeach
                                    

                                    <div style="display:inline-block; width:100%;padding-left:0px;">
                                    @foreach($goodPics as $goodPic)
                                        @if($goodPic->ismain==0)
                                        <img src="{{ $goodPic->path.$goodPic->filename}}" style="width:23%; margin-top:3px;margin-left:0px;"/>
                                        @endif
                                    @endforeach
                                    </div>      
                                </div>
                                <div style="float:right;width:374px;">
                                    <div style="font-weight:bold; font-family:Roboto; font-size:12px;text-align:left;margin-bottom:5px;">{{ $good->titleru }}</div>
                                    <div style="font-size:10px; font-family:Roboto;text-align:justify;margin-right:10px;">
                                    {{ $good->descriptionu }}
                                    </div>
                                    <div style="display:inline-block; width:100%;">
                                        <div style="float:left;text-align:left;">
                                        
                                        <?php
                                        $avgstarscount = Round($good->avgstarscount);
                                         $stars = '';
                                         $j = 0;
                                         for($i=0; $i<5;$i++){
                                             if ($j<$avgstarscount)
                                             $stars .= '<img src="/assets/img/bg/Star_orange.png" style="width:10px; margin-top:3px;"/>';
                                             else
                                             $stars .= '<img src="/assets/img/bg/Star_gray.png" style="width:10px; margin-top:3px;"/>'; 
                                             $j++;
                                         }
                                         
                                         echo $stars;
                                        ?>
                                        <!--
                                        <img src="/assets/img/bg/Star_orange.png" style="width:10px; margin-top:3px;"/>
                                        <img src="/assets/img/bg/Star_orange.png" style="width:10px; margin-top:3px;"/>
                                        <img src="/assets/img/bg/Star_orange.png" style="width:10px; margin-top:3px;"/>
                                        <img src="/assets/img/bg/Star_orange.png" style="width:10px; margin-top:3px;"/>
                                        <img src="/assets/img/bg/Star_orange.png" style="width:10px; margin-top:3px;"/>
                                        -->
                                        </div>
                                        <div style="float:left;text-align:left;color:gray;font-size:12px; margin-left:22px;margin-top:8px;font-family:Roboto;">
                                        {{$good->avgstarscount}}
                                        </div>
                                        <div style="float:left;text-align:left;color:gray;font-size:12px; margin-left:42px;margin-top:8px;font-family:Roboto;">
                                        {{$good->commentcount}} Отзывы
                                        </div>
                                        <div style="float:left;text-align:left;color:gray;font-size:12px; margin-left:42px;margin-top:8px;font-family:Roboto;">
                                        {{$good->ordercount}} заказа(ов)
                                        </div>
                                    </div>
                                    <div style="display:block; width:100%;font-size:16px;font-weight:bold;float:left;text-align:left;font-family:Roboto;margin-bottom:10px;">${{$good->price}}</div>
                                    <div style="display:block; width:100%;font-size:10px;float:left;text-align:left;font-family:Roboto;color:gray;margin-bottom:5px;">Количество:</div>
                                    <div style="display:inline-block; width:100%;font-family:Roboto;margin-bottom:10px;">
                                        <div style="float:left;background-color:#C4C4C4;
                                        color: #E5E5E5;border-radius:50%;width:23px;height:23px;
                                        padding-left:1px; padding-top:0px;font-weight:bold;cursor:pointer;" onclick="javascript:incCount({{$good->totalcount}});"
                                        >+</div>
                                        <div style="float:left;width:20px;margin-left:5px;" id="cartgoodcount">1</div>
                                        <div style="float:left;background-color:#C4C4C4;
                                        color: #E5E5E5;border-radius:50%;width:23px;height:23px;
                                        padding-left:1px; padding-top:0px;font-weight:bold;margin-left:5px;cursor:pointer;" onclick="javascript:decCount();"
                                        >-</div>
                                        <!--
                                        <button class="button-primary plus" data-id="sss" onclick="javascript:plusFunction('sss');">+</button>
                                        <button class="button-primary minus" data-id="sss" onclick="javascript:minusFunction('sss');">-</button>
                                        -->
                                        <div style="float:left;text-align:left;font-size:10px;margin-left:25px;">Дополнительно Скидка {{$good->additionaldiscountpercent}}% (от {{$good->additionaldiscountpercent}} шт.)<br/>{{$good->totalcount}} шт. в наличии (Не более 1 шт. на покупателя)</div>
                                    </div>
                                    <div style="display:inline-block; width:100%;font-family:Roboto;">
                                        <div style="float:left;background-color:#C4C4C4;
                                        color: #E5E5E5;border-radius:50%;width:22px;height:22px;padding-left:1px; padding-top:0px;">
                                            <input type="radio" id="sellType" name="sellType" value="optom" checked>
                                        </div> 
                                        <div style="float:left;margin-top:5px;margin-left:10px;margin-right:50px;font-size:12px;">Оптом</div>      
                                        <div style="float:left;background-color:#C4C4C4;
                                        color: #E5E5E5;border-radius:50%;width:22px;height:22px;padding-left:1px; padding-top:0px;">
                                            <input type="radio" id="sellType" name="sellType" value="roznitsa">
                                        </div>
                                        <div style="float:left;margin-top:5px;margin-left:10px;margin-right:50px;font-size:12px;">В розницу</div>
                                    </div>
                                    <div style="display:inline-block; width:100%;font-family:Roboto;margin-top:13px;">
                                        <div style="float:left;background-color:#CC1111;font-size:12px;
                                        color: #FFFFFF;border-radius:5%;width:100px;height:36px;padding-top:10px;margin-right:20px;">
                                        Купить сейчас
                                        </div> 
                                        <div id="addtocart" class="enabledAddToCardButton" onClick="javascript:plusFunction({{$good->id}},'{{$good->titleru}}',{{$good->price}});">
                                        Добавить в карзину
                                        </div>
                                        <div style="float:left;padding-top:4px;">
                                        <img src="/assets/img/bg/urek.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    
                    </div>

                </div>
                <div class="col-md-3 col-lg-2 item">
                    <div class="tascoRightMenu">
                        <div style="width:100%;display:inline-block; background-color:#C4D9ED;">
                            <div style="color:#0F3C80;font-size:12px; font-weight:bold;margin-top:10px;margin-bottom:10px;"> Товары Магазина </div>
                            <img src="/assets/img/tasco/shop_product1.png" style="width:70px;height:70px;">
                            <img src="/assets/img/tasco/shop_product2.png" style="width:70px;height:70px;">  
                            <img src="/assets/img/tasco/shop_product3.png" style="width:70px;height:70px;">
                            <img src="/assets/img/tasco/shop_product4.png" style="width:70px;height:70px;">
                            <img src="/assets/img/tasco/shop_product5.png" style="width:70px;height:70px;">
                            <img src="/assets/img/tasco/shop_product6.png" style="width:70px;height:70px;">
                            <div style="color:#0F3C80;font-size:12px; font-weight:bold;margin-top:10px;margin-bottom:10px;"> Показать больше </div>
                        </div>
                        <div style="width:100%;display:block;">
                            <img src="/assets/img/tasco/rightban1.png" style="width:170px;height:170px; margin-top:5px;">
                            <img src="/assets/img/tasco/rightban2.png" style="width:170px;height:170px; margin-top:5px;">  
                            <img src="/assets/img/tasco/rightban3.png" style="width:170px;height:170px; margin-top:5px;">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


       
          
@endsection
