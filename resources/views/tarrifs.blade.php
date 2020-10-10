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
                    <p><a href="/">Главная</a> > Тарифы </p>
                    </div>
                    <div class="col-md-4" style="text-align:left;">  
                        <h2>Отправка из:</h2>           
                        <SELECT name="countryid" id="countryid" onchange="javascript:loadtarrifslist(this.value)" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:230px; padding-left:10px;">
                        <OPTION value="-1">Выберите страну</OPTION>
                        <?php  $countries = CountryController::getList();?>
                        @foreach($countries as $country)
                            @if ($country->id==8)
                            <OPTION value="{{$country->id}}" selected>{{$country->nameru}}</OPTION>
                            @else
                            <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                            @endif
                        @endforeach 
                        <!-- 
                        <OPTION value="1">Китай</OPTION>
                        <OPTION value="2">Турция</OPTION> -->
                        </SELECT>
                        <br/>
                        <h2>Вид отправки:</h2>    
                        <SELECT name="transfertype" id="transfertype" onchange="javascript:loadtarrifslist(this.value)" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:230px; padding-left:10px;">
                        <OPTION value="-1" selected></OPTION>
                        
                            <OPTION value="1">Самолетом</OPTION>
                            
                            <OPTION value="2">Машиной</OPTION>
                           
                        
                        </SELECT>
                    </div>     
                    <div class="col-md-8" style="margin-top:50px;">
                 
                        <table style="width:600px;">
                            <tr style="padding-left:20px;">
                                <td style=text-align:left;>Вес:</td>
                                <td>RUS</td>
                                <td>AZE</td>
                                <td>KAZ</td>
                                <td>KGZ</td>
                            </tr>
                            <tr style="padding-left:20px;background-color:#C4D9ED;">
                                <td style="font-weight:bold;">0,1-0,5 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="padding-left:20px;">
                                <td style="font-weight:bold;">0,5-0,75 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="padding-left:20px;background-color:#C4D9ED;">
                                <td style="font-weight:bold;">0,75-1 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="padding-left:20px;">
                                <td style="font-weight:bold;">1-10 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="padding-left:20px;background-color:#C4D9ED;">
                                <td style="font-weight:bold;">10-30 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="padding-left:20px;">
                                <td style="font-weight:bold;">Выше 30 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="padding-left:20px;background-color:#C4D9ED;">
                                <td style="font-weight:bold;">Выше 50 kg</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </table>
                    </div>
                </div>    
            </div>
           
            
                
            </div>    
    </div>

 
@endsection
