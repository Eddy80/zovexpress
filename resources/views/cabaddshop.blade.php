
@extends('cabhome')

@section('cabcontent')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
<div style="padding-top:0px;">
            <div class="col-md-9 item" style="margin-left:10px;width: 807px;
            padding: 0px 20px;border-radius: 5px;background-color:#fff;display:inline-block;
            margin-bottom:0px;min-height:auto;max-width:95%;">
            <a href="#"></a>
               
                <form action="/cabaddshop" method="post">
                    {{csrf_field()}}

                    <div style="text-align:left;float:left; ">
                        <label style="font-size:11px;font-family:Roboto;color:#777777;">Обложка</label>
                        <div style="text-align:center; border-width:3px; 
                                    border-color: #C4C4C4;border-style:solid;
                                    border-radius:5px;padding:25px 35px;">
                            <img src="/assets/img/bigplus.png" />
                        </div>
                    </div> 

                    <div style="float:left; width:200px;text-align:left;margin-left:60px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Название магазина</label>
                        <input type="text" class="cabFormEdit2" value="" name="" id=""/>
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Категория магазина</label>
                        
                        <select id="shopcat" name="shopcat" class="cabFormEdit2">
                            <option value=""></value>
                            <option value="other">Другое</value>
                        </select>
                    </div> 

                    <div style="float:left; width:200px;text-align:left;margin-left:40px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Страна</label>
                        <select id="country" name="country" class="cabFormEdit2">
                            <option value=""></value>
                            <option value="other">Азербайджан</value>
                        </select>
                        
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">&nbsp;</label>
                        <input class="cabFormSubmit" style="background-color:#DF0707;width:200px;" type="submit" value="Сохранить"/>  
                    </div>                 
                </form>

                
            </div>
         
</div>

<div>

</div>
        
@endsection
