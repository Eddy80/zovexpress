
@extends('cabhome')

@section('cabcontent')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
<div style="padding-top:0px;">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" style="margin-left:20px; width:80%;">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <!--<img src="uploads/{{ Session::get('file') }}">-->
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger" style="margin-left:20px;width:80%;">
                <strong>Ой!</strong> &nbsp; Произошла ошибка.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="col-md-9 item" style="margin-left:10px;width: 807px;
            padding: 0px 20px;border-radius: 5px;background-color:#fff;display:inline-block;
            margin-bottom:0px;min-height:auto;max-width:95%;">
            <a href="#"></a>
               
                <form action="/cabaddshop" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div style="text-align:left;float:left; ">
                        <label for="file" style="margin-top:5px;font-size:11px;font-family:Roboto;color:#777777;">Обложка
                        <div style="margin-top:10px;text-align:center; border-width:3px; 
                                    border-color: #C4C4C4;border-style:solid;
                                    border-radius:5px;width:130px;height:110px;padding:0px 0px;">
                            <img id="shopimg" src="/assets/img/bigplus_.png" alt="shopimg" 
                                 style="width:125px; height:104px;max-width:126px; max-height:105px;" />
                        </label>
                        <input id="file" name="file" type="file" onchange="readURL(this);" />
                        </div>
                    </div> 

                    <div style="float:left; width:200px;text-align:left;margin-left:60px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Название магазина</label>
                        <input type="text" class="cabFormEdit2" value="" name="shopname" id="shopname"/>
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Категория магазина</label>
                        
                        <select id="shopcat" name="shopcat" class="cabFormEdit2">
                            <option value=""></value>
                            @foreach ($shopcats as $shopcat)
                            <option value="{{$shopcat->id}}">{{$shopcat->titleru}}</value>
                            @endforeach
                        </select>
                    </div> 

                    <div style="float:left; width:200px;text-align:left;margin-left:40px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Страна</label>
                        <select id="country" name="country" class="cabFormEdit2">
                            <option value="-1"></value>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->nameru}}</value>
                            @endforeach
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
