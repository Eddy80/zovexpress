
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
                        <input type="text"  class="cabFormEdit2" value="" name="" id="" />
                    </div> 

                       <div style="float:left; width:200px;text-align:left;margin-left:40px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Страна</label>
                        <input type="text" class="cabFormEdit2" style="float:right;" value="" name="" id=""/>
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">&nbsp;</label>
                        <input class="cabFormSubmit" style="background-color:#DF0707;width:200px;" type="submit" value="Сохранить"/>
                        
                    </div> 

                <!--
                    <h3 class="text-left name cabFormLabel" >Имя: <input class="cabFormEdit"  name="firstname" id="firstname" type="text" value="{{ $user[0]->firstname }}" placeholder="Имя"/></h3>
                <h3 class="text-left name cabFormLabel" >Дата регистрации: <span class="cabFormEdit">{{date('d.m.Y', strtotime($user[0]->created_at))}}</span></h3>
                <p class="description" style="text-align: justify; width: 96%;"><textarea name="description" id="description" cols="60" rows="8" style="border: 1; border-radius: 5px; border-color: #C4C4C4; padding-left: 5px; padding-bottom: 3px; background-color:#ffffff;;" >{{$user[0]->description}}</textarea></p>
                <p class="description" style="text-align: left; width: 96%;">
-->
                
                </form>

                
            </div>
            <hr style="margin:20px 180px 10px 60px;">  
            <div>
            <form action="/cabaddgoods" method="post">
            {{csrf_field()}}
            </form>
            </div>
</div>

<div>

</div>
        
@endsection
