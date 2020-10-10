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
                    <p><a href="/">Главная</a> > Адрес для заполнения </p>
                    </div>
                    
                    <!-- first row -->
                    <div class="col-md-12">
                    

                            <!-- first row subrow1 -->
                            <div class="leftpartitem">
                                <h2>Выберите страну отправителя:</h2>
                                <SELECT name="targetcountryid" id="targetcountryid" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:190px; padding-left:10px;">
                                <?php   $countries = CountryController::getList();?>
                                @foreach($countries as $country)
                                    <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                                @endforeach
                                </SELECT>
                            </div>    
                            <div class="leftpartitem narrow3">
                                <h2>Имя:</h2>
                                <!--<SELECT name="countryid" id="countryid" style="height:30px;">
                                <?php   //$countries = CountryController::getList();?>
                                @foreach($countries as $country)
                                    <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                                @endforeach
                                </SELECT>-->
                                <input type="text" name="name" id="name" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:165px; padding-left:10px;margin-right:10px;" />
                            </div>   
                            <div class="leftpartitem"> 
                                <h2>Адрес:</h2>
                                <INPUT type="text" name="address" id="address" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:200px; padding-left:10px;margin-right:10px;" />                                 
                            </div>  
                            
                               
                    </div>
                    <!-- second row -->
                    <div class="col-md-8">
                            <div class="leftpartitem">
                                <h2>Выберите страну отправки:</h2>
                                <SELECT name="targetcountryid" id="targetcountryid" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:190px; padding-left:10px;">
                                <?php   $countries = CountryController::getList();?>
                                @foreach($countries as $country)
                                    <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                                @endforeach
                                </SELECT>
                            </div>  
                            <div class="leftpartitem narrow3"> 
                                <h2>Телефон:</h2>
                                <INPUT type="text" name="phone" id="phone" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:165px; padding-left:10px;" />                                  
                            </div>
                    </div> 
                    <div class="col-md-4" style="margin-bottom: 30px;">
                            <div style="float:left;width:100%;">
                            &nbsp;              
                            </div>      
                    </div>
                    
                   
                </div>
            </div>
           
            

            
                
            </div>    
    </div>

    </form>
@endsection
