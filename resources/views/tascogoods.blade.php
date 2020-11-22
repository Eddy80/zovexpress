@extends('tascohome')

@section('tascocontent')
<div class="col-md-8 col-lg-6 item" style="padding:0px;"> 
<div class="tascoLeftMenu" style="padding:0px;">
    <img src="/assets/img/bg/tasco_main_banner.png" style="width:100%;"/>

<div style="display:inline-block; width:100%;padding:0px;">                          

@php
$count = 1;
@endphp

@foreach($goods as $good)
<a href="/tascogood/{{$good->id}}" target="blank">
<div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:<? if ($count%3==0)echo "0"; else  echo "22";?>px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
    <div> 
        <img src="{{$good->mainPicture}}" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; height:160px;" />
        <a href="#">
        <img src="/assets/img/bg/instagram_icon.png" 
        style="position:relative; top:-150px; left:-60px;z-index:10;" />
        </a>
    </div>
    <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
    <div style="display:inline-block; width:100%;">
        <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
        <div style="float:right;width:40%;">
            <img src="/assets/img/bg/Star_orange.png"/>
            <img src="/assets/img/bg/Star_orange.png"/>
            <img src="/assets/img/bg/Star_orange.png"/>
            <img src="/assets/img/bg/Star_orange.png"/>
            <img src="/assets/img/bg/Star_gray.png"/>
        </div>
    </div>
    <div style="display:inline-block; width:100%;">
        <div style="float:left;width:20%;"><img src="/assets/img/bg/heard_gray.png" /></div>
        <div style="float:left;width:20%;"><img src="/assets/img/bg/share_gray.png" /></div>
        <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
    </div>          
</div>
</a>
@php 
$count++;
@endphp       
@endforeach

</div>


</div>

<div style="width:100%;padding:20px 28%; text-align:center;">
<div style="border-radius:10px;width:250px; height:30px;padding-top:5px;background-color:#F0F0F3; text-align:center; font-size:12px;font-weight:bold;">
    <img src="/assets/img/bg/arrow_left.png" />
    &nbsp;&nbsp;&nbsp;
    1 &nbsp;&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;5 &nbsp;&nbsp;&nbsp;6 &nbsp;&nbsp;&nbsp;... &nbsp;&nbsp;&nbsp;10
    &nbsp;&nbsp;&nbsp;
    <img src="/assets/img/bg/arrow_right.png" />
</div>
</div>



                    

                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="tascoRightMenu">
                        <div>
                        <img src="/assets/img/bg/Tasco_right_banner1.png" style="width:250px;height:300px;">
                        </div>
                        <div>
                        <img src="/assets/img/bg/Tasco_right_banner2.png" style="margin-top:10px;width:250px"/>
                        </div>
                        <div>
                        <img src="/assets/img/bg/Tasco_right_banner3.png" style="margin-top:10px;width:250px"/>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection