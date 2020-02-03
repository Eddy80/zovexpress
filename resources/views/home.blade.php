@extends('layout')

@section('content')

<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsersController;
?>

<div class="highlight-clean" style="background-image: url(&quot;assets/img/mountain_bg.jpg&quot;);opacity: 1;padding: 0px 0px 5px;background-size: cover;">
    <?php
    $langid = 0;


    $maintitle = GeneralController::getShortName(1,0, $langid );
    $maintext =  GeneralController::getName(     1,0, $langid );
    ?>



    <h2 class="text-center" style="color: #ffffff;margin: 0px;padding: 0px;padding-top: 18px;">{{ $maintitle }}<br></h2>
    <p class="text-justify d-xl-flex align-self-center" style="color: #ffffff;margin: 0 auto;font-size: 16px;padding: 0px 50px;">{{ $maintext }}<br></p>
    <div class="container text-justify">
        <div class="intro"></div>
        <div class="buttons" style="margin: 20px 23px;">
            <a class="btn btn-light text-center border rounded border-warning ml-auto action-button" role="button" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 175px;height: 35px;padding: 10px 18px 10px 18px;font-size: 14px;color: #ffffff;"><strong>КАЛЬКУЛЯТОР</strong><br></a>
            <a class="btn btn-light text-center border rounded border-warning ml-auto action-button" role="button" href="{{url('infotracking')}}" data-bs-hover-animate="rubberBand" style="background-color: transparent;width: 175px;height: 35px;padding: 10px 18px 10px 18px;font-size: 14px;color: #ffffff;"><strong>Отслеживание</strong></a>
        </div>
    </div>
</div>
<div class="carousel slide" data-ride="carousel" id="carousel-2">
    <div class="carousel-inner" role="listbox" >
        <div class="carousel-item active" style=""><img class="w-100 d-block" src="assets/img/manshet/m1.png" alt="Slide Image"></div>
        <div class="carousel-item" style=" "><img class="w-100 d-block" src="assets/img/manshet/m2.png" alt="Slide Image"></div>
        <div class="carousel-item" style=" "><img class="w-100 d-block" src="assets/img/manshet/m3.png" alt="Slide Image"></div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-2" role="button"
                                                                                                                                                                                         data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-2" data-slide-to="1"></li>
        <li data-target="#carousel-2" data-slide-to="2"></li>
    </ol>
</div>

<div class="team-clean">
<div class="container">
            <div class="intro">
                &nbsp;
            </div>
    <div class="intro">
        &nbsp;
    </div>
    <div class="row people">
        <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
            <a href="{{url('infosending')}}"><img src="assets/img/info1.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
            <a href="{{url('infosending')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Виды отправок и сроки</strong><br></h3></a>

<!--            <a href="{{url('calculator')}}"><img src="assets/img/info4.png" style="width: 120px;height: 120px;"></a>-->
<!--            <a href="{{url('calculator')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Калькулятор</strong><br></h3></a>-->
        </div>
        <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
            <a href="{{url('tasco')}}"><img src="assets/img/info2.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
            <a href="{{url('tasco')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Информация о TASCO</strong><br></h3></a>
<!--            <a href="{{url('infotracking')}}"><img src="assets/img/info5.png" style="width: 120px;height: 120px;"></a>-->
<!--            <a href="{{url('infotracking')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Отслеживание</strong><br></h3></a>-->
        </div>
        <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
            <a href="{{url('forbidden')}}"><img src="assets/img/info3.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
            <a href="{{url('forbidden')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Запрещенные товары</strong><br></h3></a>
<!--            <a href="{{url('other')}}"><img src="assets/img/info3.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>-->
<!--            <a href="{{url('other')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Другое</strong><br></h3></a>-->
        </div>
    </div>
</div>
</div>
<!---->
<!--<div class="team-clean" style="width: 100%;"></div>-->
<!--<div class="team-clean">-->
<!--    <div class="container">-->
<!--        <div class="intro">-->
<!--<           <h2 class="text-center" style="font-size: 18px; padding-top: -20px;">Информация</h2>-->
<!--        </div>-->
<!--        <p class="text-center" style="margin: 39px;"></p>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="team-clean">-->
<!--    <div class="container">-->
<!--        <div class="intro">-->
<!--            <h2 class="text-center" style="font-size: 18px;"></h2>-->
<!--        </div>-->
<!--        <div class="row people">-->
<!--            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">-->
<!--                <a href="{{url('infosending')}}"><img src="assets/img/info1.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>-->
<!--                <a href="{{url('infosending')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Виды отправок и сроки</strong><br></h3></a>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">-->
<!--                <a href="{{url('tasco')}}"><img src="assets/img/info2.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>-->
<!--                <a href="{{url('tasco')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Информация о TASCO</strong><br></h3></a>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">-->
<!--                <a href="{{url('forbidden')}}"><img src="assets/img/info3.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>-->
<!--                <a href="{{url('forbidden')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Запрещенные товары</strong><br></h3></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div>
    <div class="slider-header">
        <h2 class="text-center" style="background-color:#262936 ;color:#DA9904;font-size: 18px;margin: 0 auto; padding-top: 40px;">
            <strong>ОТЗЫВЫ</strong>
        </h2>
    </div>
<div class="simple-slider" >

    <div class="swiper-container">

        <div class="swiper-wrapper">
            <?php   $reviews = GeneralController::getReviewsList();  ?>
            @foreach($reviews as $review)
            <div class="swiper-slide" style=" height:auto;padding:80px 0px 0px 0px; margin:0 auto;margin-bottom:50px;background-color: #262936; ">

                <p style="color: #ffffff;  height:auto; width: 85%;text-align: justify;margin:0 auto;">
                    {{$review->textru}}
                </p>
                <?php

                $user = UsersController::getUserFLNames($review->userid);
                ?>
                <p style="color: #c69500;width: 85%;text-align: right;margin-top: 30px;margin-bottom: 50px;">
                @if (count($user) > 0)
                {{ $user[0]->firstname }} {{ $user[0]->lastname }}
                @endif

                </p>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-pagination"></div>
    </div>
</div>&nbsp;&nbsp;
</div>

&nbsp;

<div class="team-clean">
    <div class="container">
<!--        <div class="intro">-->
<!--            <h2 class="text-center" style="font-size: 18px;"></h2>-->
<!--        </div>-->
        <div class="row people">
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('calculator')}}"><img src="assets/img/info4.png" style="width: 120px;height: 120px;"></a>
                <a href="{{url('calculator')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Калькулятор</strong><br></h3></a>
            </div>
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('infotracking')}}"><img src="assets/img/info5.png" style="width: 120px;height: 120px;"></a>
                <a href="{{url('infotracking')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Отслеживание</strong><br></h3></a>
            </div>
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('other')}}"><img src="assets/img/info3.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
                <a href="{{url('other')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Другое</strong><br></h3></a>
            </div>
        </div>
    </div>
</div>
@endsection
