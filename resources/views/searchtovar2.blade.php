@extends('layout')

@section('content')
<?php
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TrackingsController;

?>
<div class="team-grid nakladnaya">
        <div class="container">
          
            
            
        <form method="post" action="{{ route('couriers') }}" name="createsearchtovar" id="createsearchtovar">
            @csrf
            <div class="container" style="background-color: #fff; 
            background-image:url(/assets/img/bg/bgpeople.png); background-position: right bottom;
            background-repeat: no-repeat;background-size: cover;background-size: 460px 280px;box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left: 6%;padding-right: 4%; padding-bottom:160px;">
               
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Оставить заявку на поиск товара </p>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align:center;">             
                        
                    </div>     
                    <div class="col-md-4"></div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="text-align:center;">             
                       <p style="text-align:center; color:#000000;"> 
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>     
                    <div class="col-md-1"></div>
                    <div class="col-md-12">&nbsp;</div>
                    
                    <!-- first row -->

                        
                            <div class="col-md-1">
                                    <div class="leftpartitem narrow">
                                    &nbsp;    
                                    </div>
                            </div>  
                            
                            <div class="col-md-10">
                                
                                <div class="leftpartitem narrow3"> 
                                    <h2>Код друга:<span style="color:red;">*</span></h2>
                                    <INPUT type="text" name="targetphone1" id="targetphone1" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:35px;" />                                 
                                </div>  
                                <div class="leftpartitem narrow3"> 
                                    <h2>Email друга:<span style="color:red;">*</span></h2>
                                    <INPUT type="text" name="targetphone1" id="targetphone1" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:35px;" />                                 
                                </div>
                                <div class="leftpartitem narrow3"> 
                                    <h2>Телефон друга:<span style="color:red;">*</span></h2>
                                    <INPUT type="text" name="targetphone1" id="targetphone1" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:35px;" />                                 
                                </div>
                                <div class="leftpartitem narrow3">
                                    <h2>Ваш код:<span style="color:red;">*</span></h2>
                                    @if ( Auth::check())
                                    <SELECT name="personalcode" id="personalcode" style="width:180px;  border: 1px solid #C4C4C4; border-radius:5px; height:35px;">
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
                                    <INPUT type="text" name="personalcode" id="personalcode" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:35px;" />   
                                    @endif
                                </div>
                                 
                            </div>
                            

                            <div class="col-md-1">
                                <div class="leftpartitem narrow">
                                &nbsp;    
                                </div>
                            </div>
                    
                               
                    <div class="col-md-12">
                            <div class="leftpartitem narrow">
                            &nbsp;    
                            </div>
                    </div> 
                    <div class="col-md-12">
                            <div class="leftpartitem narrow">
                            &nbsp;    
                            </div>
                    </div> 
                     
                    <!-- third row -->
                    <div class="col-md-5">
                            <div class="leftpartitem narrow">
                            &nbsp;    
                            </div>
                    </div> 
                    
                    <div class="col-md-2">
                        
                              
                            <div class="leftpartitem narrow2">
                                
                                <INPUT type="submit" id="order" value="Отправить" style="background-color: #DF0707;width:160px; height:45px;vertical-align:center;"/>                
                            </div>      
                    </div> 
                    <div class="col-md-5">
                            <div class="leftpartitem narrow">
                            &nbsp;    
                            </div>
                    </div> 




                    
                   
                </div>
            </div>
           
            

            
                
            </div>    
    </div>

    </form>
@endsection
