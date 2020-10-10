@extends('layout')

@section('content')
<?php
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TrackingsController;
?>
<div class="team-grid nakladnaya">
        <div class="container">
          
            
            
        <form method="post" action="{{ route('invoices') }}" name="createinvoice" id="createinvoice">
            @csrf
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left: 8%; padding-bottom:30px;">
                
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Накладная </p>
                    </div>
                    
                    <!-- first row -->
                    <div class="col-md-7">
                        <div class="leftpart">
                            <!-- first row subrow1 -->
                            <div class="leftpartitem narrow">
                                <h2>Страна:</h2>
                                <SELECT name="countryid" id="countryid" style="height:30px;">
                                <?php   $countries = CountryController::getList();?>
                                @foreach($countries as $country)
                                    <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                                @endforeach
                                </SELECT>
                            </div>     
                            <div class="leftpartitem wide" style="display:inline-block;margin-right:10px;">
                                <h2>Ваш персональный код:</h2>
                                @if ( Auth::check())
                                <SELECT name="personalcode" id="personalcode" style="float:left;width:80%;height:30px;">
                                <?php   $codes = CodesController::getListByUserId();?>
                                @foreach($codes as $code)
                                    <?php
                                    $countryid =  $code->countryid;
                                    $country = CountryController::getNameById($countryid);
                                    $countryinfoid =  $code->countryinfoid;
                                    $countryinfo = CountryController::getInfoByIds($countryid, $countryinfoid);
                                    ?>
                                    <OPTION value="{{$code->id}}">{{$code->code}} - [{{ $country->nameru }}] -  ({{$countryinfo[0]->inforu}})</OPTION>
                                @endforeach    
                                </SELECT>
                                @endif
                                @if ( !Auth::check())
                                <INPUT type="text" name="personalcode" id="personalcode" value="" 
                                style="float:left;width:80%;" />   
                                @endif
                                <div class="circleBase">i</div>                              
                            </div>    
                            <div class="leftpartitem"> 
                                <h2>Промокод:</h2>
                               <!-- <INPUT type="hidden" name="percent" id="percent" value="">-->
                                <INPUT type="text" name="promocode" id="promocode" value="" onkeyup="javascript:changeEndPrice();"/>                                 
                            </div>       
                        </div>
                        <!-- first row subrow2 -->
                        <div>                          
                            <div class="leftpartitem" style="width: 95%;">
                                <h2>Линк товара:</h2>                              
                                <input type="text" name="link" id="link" value="" style="width: 100%;">
                            </div>                                    
                        </div>
                    </div> 
                    <div class="col-md-4">
                                <div style="float:left;width:100%;">
                                <h2>Примечание:</h2>
                                <textarea id="description" name="description" style="resize: none;width:100%;height:128px;" placeholder="Примечание"/>  </textarea>                   
                            </div>                               
                    </div>
                    <!-- second row -->
                    <div class="col-md-7">
                        <div class="leftpart">
                            <div class="leftpartitem narrow2">
                                <h2>Размер:</h2>
                                <INPUT type="text" name="size" id="size" value=""/>                                 
                            </div>    
                            <div class="leftpartitem narrow2">
                                <h2>Цвет:</h2>
                                <INPUT type="text" name="color" id="color" value=""/>                                 
                            </div>    
                            <div class="leftpartitem lnarrow">
                                <h2>Кол-во:</h2>
                                <INPUT type="text" name="count" id="count" value="" onkeyup="javascript:changeEndPrice();" />                                 
                            </div> 
                            <div class="leftpartitem narrow2">
                                <h2>Цена:</h2>
                                <INPUT type="text" name="price" id="price" value="" onkeyup="javascript:changeEndPrice();"/>                                 
                            </div>    
                        </div>
                        
                    </div> 
                    <div class="col-md-4" style="margin-bottom: 30px;">
                            <div style="float:left;width:100%;">
                                <h2>Заключительная цена:</h2>
                                <INPUT type="text" name="lastprice" id="lastprice" value="" readonly style="width:83%;float:left;margin-right:0px;"/> 
                                <INPUT type="hidden" name="status" id="status" value="0"/>
                                <INPUT type="hidden" name="userid" id="userid" value="-1"/> 
                                <div class="endpriceblue"> +5% </div>              
                            </div>      
                    </div>
                    <!-- third row -->
                    <div class="col-md-7">
                        <input type="checkbox" id="isExpress" name="isExpress" >
                        <label for="isExpress"> Оформить экспресс заказ</label>
                        <label for="isExpress" style="background-color:#FFF800; margin-left:10px; padding-left:10px; padding-right:10px;"> <strong>+5%</strong> </label>                          
                    </div> 
                    <div class="col-md-4" style="margin-bottom: 30px;">
                        <div style="float:left;width:100%;">
                            <INPUT onclick="addToBasket();" type="button" id="addtobasket" value="Добавить в корзину" style="margin-right: 15px;" />    
                            <INPUT type="submit" id="order" value="Заказать" style="background-color: #DF0707; margin-right: 0px;"/>                
                        </div>      
                    </div>
                   
                </div>
            </div>
           
            <div class="row" style="padding-left:0 auto; padding-left: 10%; padding-top: 30px; padding-bottom:10px;">
                <a href="javascript:clearNakladnaya();">Добавить новый линк</a>
            </div>

            
                
            </div>    
    </div>

    </form>
@endsection
