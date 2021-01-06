
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
                        <label for="myfile" style="margin-top:5px;font-size:11px;font-family:Roboto;color:#777777;">Обложка
                        <div style="margin-top:10px;text-align:center; border-width:3px; 
                                    border-color: #C4C4C4;border-style:solid;
                                    border-radius:5px;width:130px;height:110px;padding:0px 0px;">
                            <img id="shopimg" src="/assets/img/bigplus_.png" alt="shopimg" 
                                 style="width:125px; height:104px;max-width:126px; max-height:105px;" />
                        <input id="myfile" name="myfile" type="file" onchange="readURL(this, '#shopimg');" required />
                        </div>
                        </label>
                    </div> 

                    <div style="float:left; width:200px;text-align:left;margin-left:60px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Название магазина</label>
                        <input type="text" class="cabFormEdit2" value="" name="shopname" id="shopname" required />
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Категория магазина</label>
                        
                        <select id="shopcat" name="shopcat" class="cabFormEdit2" required>
                            <option value=""></value>
                            @foreach ($shopcats as $shopcat)
                            <option value="{{$shopcat->id}}">{{$shopcat->titleru}}</value>
                            @endforeach
                        </select>
                    </div> 

                    <div style="float:left; width:200px;text-align:left;margin-left:40px; background-color:#fff;">
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">Страна</label>
                        <select id="country" name="country" class="cabFormEdit2" required>
                            <option value=""></value>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->nameru}}</value>
                            @endforeach
                        </select>
                        
                        <label style="width:200px;font-size:11px;font-family:Roboto;color:#777777;text-align:left;">&nbsp;</label>
                        <input class="cabFormSubmit" style="background-color:#DF0707;width:200px;" type="submit" value="Сохранить"/>  
                    </div>                 
                </form>
            </div>
 
            <hr style="margin:20px 180px 10px 60px;">  
            <div style="background-color:#F7F7F7; width:750px; height:450px;margin-top:40px;margin-left:30px;
                        border-radius:10px;padding: 20px;box-shadow:1px 2px 2px 1px #888888;">
            <form action="/cabaddgoods" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div style="text-align:left;float:left;width:210px; ">
                        <label for="goodname" style="width:150px;font-size:11px;font-family:Roboto;
                        color:#777777;float:left;">Название товара</label>
                        <input id="goodname" name="goodname" class="cabFormEdit3" type="text" required />
                        <label for="shopidname" style="float:left;width:200px;font-size:11px;font-family:Roboto;
                        color:#777777;">Выберите магазин</label>
                        <select id="shopidname" name="shopidname" class="cabFormSelect" required>
                            <option value=""></value>
                            @foreach ($myshops as $myshop)
                            <option value="{{$myshop->id}}_{{$myshop->titleru}}">{{$myshop->titleru}}</value>
                            @endforeach
                        </select>

                        
                        <!-- <input type="radio" id="optom" name="selltype" class="cabFormRadio" value="0">-->
                        <label for="priseoptom" style="padding-left:5px;padding-top:10px;float:left;width:160px;font-size:11px;font-family:Roboto;
                        color:#777777;margin-right:40px;">Цена оптом ($)</label>
                        <input id="priseoptom" name="priseoptom" class="cabFormEdit3" type="number" min="0.00" max="10000.00" step="0.01"  required />    
                        <!-- <input type="radio" id="roznitsa" name="selltype" class="cabFormRadio" value="1" checked>-->
                        <label for="priseroznitsa" style="padding-left:5px;float:left;width:160px;font-size:11px;font-family:Roboto;
                        color:#777777;">Цена в розницу ($)</label>
                        <input id="priseroznitsa" name="priseroznitsa" class="cabFormEdit3" type="number" min="0.00" max="10000.00" step="0.01"  required />
                        

                        <label for="discountfrom" style="margin-top:10px;adding-top:10px;float:left;width:60px;font-size:11px;font-family:Roboto;
                        color:#777777;">Скидка от</label>
                        <input id="discountfrom" name="discountfrom" class="cabFormEdit4" type="number" min="0" max="10000" step="1"  required />
                        <label for="discountpercent" style="padding-top:10px;padding-left:5px;float:left;width:20px;font-size:11px;font-family:Roboto;
                        color:#777777;">шт.</label>
                        <input id="discountpercent" name="discountpercent" class="cabFormEdit4" type="number" min="0.00" max="10000.00" step="0.01"  required />
                        <label style="padding-top:10px;padding-left:5px;float:left;width:10px;font-size:11px;font-family:Roboto;
                        color:#777777;">%</label>
                       
                </div> 

                <div style="text-align:left;float:left;width:480px;margin-left:10px; ">
                        <label for="gooddescription" style="width:150px;font-size:11px;font-family:Roboto;
                        color:#777777;float:left;">Описание товара</label>
                        <textarea id="gooddescription" name="gooddescription" class="cabFormTextarea" required></textarea>

                        <div style="display:inline-block; width:100%;">
                        <label style="float:left;margin-top:3px;margin-bottom:0px;font-size:11px;font-family:Roboto;color:#777777;">Добавить фото    
                        </div>
                        <div style="display:inline-block; width:490px;">
                            <label for="goodfilemain">
                            <div style="margin-top:0px;text-align:center; border-width:3px; 
                                        border-color: #C4C4C4;border-style:solid;float:left;
                                        border-radius:5px;width:85px;height:85px;padding:0px 0px;margin-right:11px;">
                                <img id="goodimgmain" src="/assets/img/bigplus_.png" alt="goodimgmain" 
                                style="width:79px; height:79px;max-width:79px; max-height:79px;" />
                            <input type="file" id="goodfilemain" name="goodfilemain" onchange="readURL(this, '#goodimgmain');" required />
                            </div>
                            </label>
                            <label for="goodfile2" >
                            <div style="margin-top:0px;text-align:center; border-width:3px; 
                                        border-color: #C4C4C4;border-style:solid;float:left;
                                        border-radius:5px;width:85px;height:85px;padding:0px 0px;margin-right:11px;">
                                <img id="goodimg2" src="/assets/img/bigplus_.png" alt="goodimg2" 
                                style="width:79px; height:79px;max-width:79px; max-height:79px;" />
                            <input id="goodfile2" name="goodfile2" type="file" onchange="readURL(this, '#goodimg2');"  />
                            </div>
                            </label>
                            <label for="goodfile3" >
                            <div style="margin-top:0px;text-align:center; border-width:3px; 
                                        border-color: #C4C4C4;border-style:solid;float:left;
                                        border-radius:5px;width:85px;height:85px;padding:0px 0px;margin-right:11px;">
                                <img id="goodimg3" src="/assets/img/bigplus_.png" alt="goodimg3" 
                                style="width:79px; height:79px;max-width:79px; max-height:79px;" />
                            <input id="goodfile3" name="goodfile3" type="file" onchange="readURL(this, '#goodimg3');"  />
                            </div>
                            </label>
                            <label for="goodfile4" >
                            <div style="margin-top:0px;text-align:center; border-width:3px; 
                                        border-color: #C4C4C4;border-style:solid;float:left;
                                        border-radius:5px;width:85px;height:85px;padding:0px 0px;margin-right:11px;">
                                <img id="goodimg4" src="/assets/img/bigplus_.png" alt="goodimg4" 
                                style="width:79px; height:79px;max-width:79px; max-height:79px;" />
                            <input id="goodfile4" name="goodfile4" type="file" onchange="readURL(this, '#goodimg4');" />
                            </div>
                            </label>
                            <label for="goodfile5" >
                            <div style="margin-top:0px;text-align:center; border-width:3px; 
                                        border-color: #C4C4C4;border-style:solid;float:left;
                                        border-radius:5px;width:85px;height:85px;padding:0px 0px;margin-right:0px;">
                                <img id="goodimg5" src="/assets/img/bigplus_.png" alt="goodimg5" 
                                style="width:79px; height:79px;max-width:79px; max-height:79px;" />
                            <input id="goodfile5" name="goodfile5" type="file" onchange="readURL(this, '#goodimg5');" />
                            </div>
                            </label>
                           
                        </div>
                </div> 
                <div style="text-align:left;width:210px; ">
                <label style="width:200px;font-size:0px;font-family:Roboto;color:#777777;text-align:left;">&nbsp;</label>
                        <input class="cabFormSubmit" style="background-color:#DF0707;width:200px;" type="submit" value="Сохранить"/>  
            
                </div> 
            </form>
            </div>
            <div class="row" style="padding-left:0 auto; padding-left: 10%; padding-top: 30px; padding-bottom:10px;">
                <a href="javascript:clearTovar();">Добавить новый товар</a>
            </div>
</div>


        
@endsection
