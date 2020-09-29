@extends('layout')

@section('content')
<?php
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CountryController;
?>
<div class="team-grid nakladnaya">
        <div class="container">
          
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left:8%; padding-right: 8%; padding-bottom:30px;">
                
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Филиалы </p>
                    </div>
                    
                    
                    <div class="col-md-4" style="text-align:left;">             
                        <SELECT name="countryid" id="countryid" onchange="javascript:loadbranchlist(this.value)" style="height:30px;width:230px;">
                        <OPTION value="-1">Выберите страну</OPTION>
                        <?php  $countries = CountryController::getList();?>
                        @foreach($countries as $country)
                            @if ($country->id==3)
                            <OPTION value="{{$country->id}}" selected>{{$country->nameru}}</OPTION>
                            @else
                            <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                            @endif
                        @endforeach 
                        <!-- 
                        <OPTION value="1">Китай</OPTION>
                        <OPTION value="2">Турция</OPTION> -->
                        </SELECT>
                        <p style="text-align:left;color:#000;margin-top:30px;">г.Баку. пр. Нобеля 175 <br/>+994 55 616 16 19</p>
                    </div>     
                    <div class="col-md-8">
                        <img src="/assets/img/map.png" style="width:600px;" />
                    </div>
                </div>    
            </div>
           
            
                
            </div>    
    </div>

 
@endsection
