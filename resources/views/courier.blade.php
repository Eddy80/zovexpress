@extends('layout')

@section('content')
<?php
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TrackingsController;

?>
<div class="team-grid nakladnaya">
        <div class="container">
          
            
            
        <form method="post" action="{{ route('couriers') }}" name="createcourier" id="createcourier">
            @csrf
            <div class="container" style="background-color: #fff; background-image:url(/assets/img/bg/bgcourier.png); background-position: right bottom;
    background-repeat: no-repeat;background-size: cover;background-size: 755px 358px;;box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left: 8%;padding-right: 8%; padding-bottom:130px;">
               
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Заказать курьера </p>
                    </div>
                    
                    <!-- first row -->
                    <div class="col-md-12">
                    

                            <!-- first row subrow1 -->
                            <div class="leftpartitem narrow2">
                                <h2>Выберите страну:<span style="color:red;">*</span></h2>
                                <SELECT name="targetcountryid" id="targetcountryid" style="height:28px;">
                                <?php   $countries = CountryController::getList();?>
                                @foreach($countries as $country)
                                    <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                                @endforeach
                                </SELECT>
                            </div>    
                            <div class="leftpartitem narrow2">
                                <h2>Выберите регион:<span style="color:red;">*</span></h2>
                                <!--<SELECT name="countryid" id="countryid" style="height:30px;">
                                <?php   //$countries = CountryController::getList();?>
                                @foreach($countries as $country)
                                    <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                                @endforeach
                                </SELECT>-->
                                <input type="text" name="targetregionname" id="targetregionname" value="" style="width:125px;margin-right:40px;" />
                            </div>   
                            <div class="leftpartitem narrow3"> 
                                <h2>Контактный номер:<span style="color:red;">*</span></h2>
                                <INPUT type="text" name="targetphone1" id="targetphone1" value="" />                                 
                            </div>  
                            <div class="leftpartitem narrow3"> 
                                <h2>Контактный номер2:</h2>
                                <INPUT type="text" name="targetphone2" id="targetphone2" value="" />                                 
                            </div>      
                            <div class="leftpartitem narrow3">
                                <h2>Персональный код:<span style="color:red;">*</span></h2>
                                @if ( Auth::check())
                                <SELECT name="personalcode" id="personalcode" style="width:180px; height:28px;">
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
                                <INPUT type="text" name="personalcode" id="personalcode" value="" />   
                                @endif
                            </div>
                               
                    </div>
                    <!-- second row -->
                    <div class="col-md-8">
                        <div class="leftpart">
                            <div class="leftpartitem wide" style="width:300px;margin-right:30px;">
                                <h2>Точный адрес:<span style="color:red;">*</span></h2>
                                <INPUT type="text" name="targetaddress" id="targetaddress" value="" style="width:300px;margin-right:30px;"/>                                 
                            </div>    
                            <div class="leftpartitem narrow2">
                                <h2>Кол-во посылок:</h2>
                                <INPUT type="text" name="posilkacount" id="posilkacount" value=""/>                                 
                            </div>          
                        </div>
                    </div> 
                    <div class="col-md-4" style="margin-bottom: 30px;">
                            <div style="float:left;width:100%;">
                            &nbsp;              
                            </div>      
                    </div>
                    <!-- third row -->
                    <div class="col-md-8">
                            <div class="leftpartitem" style="margin-right:30px;">
                                <h2>Стоимость доставки:</h2>
                                <INPUT type="text" name="lastprice" id="lastprice" value=""/> 
                                @if ( Auth::check())
                                <input type="hidden" name="userid" id="userid" value="{{Auth::id()}}" /> 
                                @else
                                <input type="hidden" name="userid" id="userid" value="-1" /> 
                                @endif                               
                            </div>  
                            <div class="leftpartitem">
                                <h2>&nbsp;</h2>
                                <INPUT type="submit" id="order" value="Заказать" style="background-color: #DF0707;width:160px; height:30px;"/>                
                            </div>      
                    </div> 
                    <div class="col-md-4">
                        <div style="float:left;width:100%;background-image:url(/assets/img/bg/bgcourier.png);">
                            &nbsp;
                        </div>      
                    </div>
                   
                </div>
            </div>
           
            

            
                
            </div>    
    </div>

    </form>
@endsection
