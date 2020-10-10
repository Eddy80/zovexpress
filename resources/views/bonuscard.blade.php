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
                <div class="row" style="padding-left:0 auto; padding-left: 8%;padding-right: 8%; padding-bottom:30px;">
                
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Бонусная карта </p>
                    </div>
                    
                    <!-- first row -->
                    <div class="col-md-7">
                        <div class="leftpart">
                            <!-- first row subrow1 -->
                            
                            <h3 style="font-family:Roboto;font-size:24px;font-weight:bold;color: #0F3C80;"> ОФОРМИТЬ <br>БОНУСНУЮ КАРТУ </h3>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>    
                        </div>
                        
                    </div> 
                    <div class="col-md-4">
                                <div style="float:left;width:100%;padding-top:10px;">
                                <img src="/assets/img/bg/bonus_card.png" style="width:100%;" />
                                                  
                            </div>                               
                    </div>
                    <!-- second row -->
                    <div class="col-md-12" style="background-color:#F7F7F7; padding:40px; padding-left:10%;padding-right:10%;box-shadow:0px 2px 2px 0px gray;border-radius:5px; ">
                        <h4 style="font-family:Roboto;font-size:14px;font-weight:bold;color: #000000;">Оформить бонусную карту</h4>
                        <div class="leftpart">
                            <div class="leftpartitem narrow4">
                                <h2>Ваш код:</h2>
                                <INPUT type="text" name="size" id="size" value="" style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:167px; padding-left:10px;"/>                                 
                            </div>    
                            <div class="leftpartitem narrow4">
                                <h2>Имя:</h2>
                                <INPUT type="text" name="firstname" id="firstname" value=""  style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:167px; padding-left:10px;"/>                                 
                            </div>    
                            <div class="leftpartitem narrow4">
                                <h2>Фамилия:</h2>
                                <INPUT type="text" name="lastname" id="lastname" value=""  style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:167px; padding-left:10px;"/>                                  
                            </div> 
                            <div class="leftpartitem narrow4">
                                <h2>Ваш Email:</h2>
                                <INPUT type="text" name="email" id="email" value=""  style="border: 1px solid #C4C4C4; border-radius:5px; height:40px;width:167px; padding-left:10px;"/>                                  
                            </div>    
                        </div>
                        <div style="width:100%;display:inline-block">
                            <div class="col-md-9" style="float:left;" >&nbsp;</div>    
                            <div class="col-md-2" style="float:left;margin-top:30px;">
                                <INPUT type="submit" id="order" value="Отправить" style="text-align:center;background-color: #DF0707;width:150px; height:40px;"/>                
                            </div>  
                        </div>  
                    </div> 
                    
                    
                   
                </div>
            </div>
           
            

            
                
            </div>    
    </div>

    </form>
@endsection
