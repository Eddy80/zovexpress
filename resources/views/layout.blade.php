<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\CountryController;
$lang = 0;
//echo $lang;
$menuabout = GeneralController::getName(2,0, $lang );
$menuinfo =  GeneralController::getName(2,1, $lang );
$menusub1 =  GeneralController::getName(2,11, $lang );
$menusub2 =  GeneralController::getName(2,12, $lang );
$menusub3 =  GeneralController::getName(2,13, $lang );
$menucalculator =  GeneralController::getName(2,2, $lang );
$menutracking =  GeneralController::getName(2,3, $lang );
$menureviews =  GeneralController::getName(2,4, $lang );
$menucontact =  GeneralController::getName(2,5, $lang );
$menutasco =  GeneralController::getName(2,9, $lang );

$login =  GeneralController::getName(     5,0, $lang );
$registration =  GeneralController::getName(     5,1, $lang );
?>



<!DOCTYPE html>
<html lang="az" style="filter: brightness(100%);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ZovExpress</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">

    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">



    <!--[if IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->

    <script type="text/javascript">
        window.$crisp=[];
        window.CRISP_WEBSITE_ID="83b434d0-9f06-472c-a895-9d515eae2662";
        (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";
        s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
    </script>
</head>

<body>
<!--<div>-->
<!--    <div class="header-dark" style="margin: 0px;background-image: url(&quot;transparent&quot;);background-color: rgb(68,66,66);padding: 0px;">-->
<!--        <div></div>-->
<!--        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color: #212a39;padding: 10px 0px 10px 0px;margin: 0 auto;">-->
<!--            <div class="container">-->
<!--                <a href="/"><input type="image" alt="" style="border-image-width: 0px; border-width: 0px; border-color: #1b1e21; width: 73px;height: 52px;" src="/assets/img/logo.png"/></a>-->
<!--                <div class="collapse navbar-collapse" id="navcol-1" style="padding: 0px 5px 0px 20px;">-->
<!--                    <ul class="nav navbar-nav" style="width: 100%;">-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('about')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menuabout}}</a></li>-->
<!--                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="rubberBand" style="font-size: 14px;width: auto;">{{$menuinfo}}</a>-->
<!--                            <div class="dropdown-menu" role="menu" style="background-color: #1f2938;height: 95px;padding: 10px;">-->
<!--                                <a class="dropdown-item" role="presentation" href="{{url('infosending')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub1}}</a>-->
<!--                                <a class="dropdown-item" role="presentation" href="{{url('forbidden')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub2}}</a>-->
<!--                                <a class="dropdown-item" role="presentation" href="{{url('infotracking')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub3}}</a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucalculator}}</a></li>-->
<!--                        @if ( Auth::check())-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tracking')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menutracking}}</a></li>-->
<!--                        @else-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('infotracking')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menutracking}}</a></li>-->
<!--                        @endif-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('reviews')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menureviews}}</a></li>-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('contact')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucontact}}</a></li>-->
<!--                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tasco')}}" data-bs-hover-animate="tada" style="color: #da9904;font-size: 14px;"><strong>{{$menutasco}}</strong></a></li>-->
<!--                    </ul>-->
<!--                    @if (Auth::check())-->
<!--                    <span class="navbar-text" style="margin: 0px 10px 0px 20px;">-->
<!--                        <a class="text-right text-primary login" href="{{url('cab')}}" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38px;font-size: 14px;width: 17px;"><strong>Кабинет</strong></a>-->
<!--                    </span>-->
<!--                    <a class="btn btn-light border rounded ml-auto action-button" role="button" href="{{url('logout')}}" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 80px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>Выход</strong></a>-->
<!--                    @else-->
<!--                    <span class="navbar-text" style="margin: 0px 10px 0px 20px;">-->
<!--                        <a id="loginclick" class="text-right text-primary login" href="javascript:loginform();" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38px; font-size: 14px;width: 14px;"><strong>{{$login}}</strong></a>-->
<!--                    </span>-->
<!--                    <a class="btn btn-light border rounded ml-auto action-button" role="button" href="javascript:regform();" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 120px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>{{$registration}}</strong></a>-->
<!--                    @endif-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
<!--        <div></div>-->
<!--        <div></div>-->
<!--        <div></div>-->
<!--    </div>-->
<!--</div>-->

<div></div>
<nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color: #212a39;padding: 10px 0px 10px 0px;margin: 0px;">
    <div class="container">
        <a href="/"><input type="image" alt="" style="margin-left: 10px;border-image-width: 0px; border-width: 0px; border-color: #1b1e21; width: 73px;height: 52px;" src="/assets/img/logo.png"/></a>
<!--        <a class="navbar-brand" href="#"><img style="margin-left: 10px;width: 73px;height: 52px;background-image: url(&quot;assets/img/logo.png&quot;);color: rgb(255,255,255);"></a>-->
        <button style="margin-right: 10px;" class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1" style="text-align: right; margin-right: 10px; ">

            <ul class="nav navbar-nav" style="width: 100%;text-align: right; margin-right: 10px; margin-left: 30px;">
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('about')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menuabout}}</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="rubberBand" style="font-size: 14px;width: auto;">{{$menuinfo}}</a>
                        <div class="dropdown-menu" role="menu" style="background-color: #1f2938;height: 95px;padding: 10px;">
                            <a class="dropdown-item" role="presentation" href="{{url('infosending')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub1}}</a>
                            <a class="dropdown-item" role="presentation" href="{{url('forbidden')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub2}}</a>
                            <a class="dropdown-item" role="presentation" href="{{url('infotracking')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub3}}</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucalculator}}</a></li>
                    @if ( Auth::check())
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tracking')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menutracking}}</a></li>
                    @else
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('infotracking')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menutracking}}</a></li>
                    @endif
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('reviews')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menureviews}}</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('contact')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucontact}}</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tasco')}}" data-bs-hover-animate="tada" style="color: #da9904;font-size: 14px;"><strong>{{$menutasco}}</strong></a></li>
                </ul>
                @if (Auth::check())
                <span class="navbar-text" style="margin: 0px 10px 0px 20px;">
                    <a class="text-right text-primary login" href="{{url('cab')}}" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38px;font-size: 14px;width: 17px;"><strong>Кабинет</strong></a>
                </span>
                <a class="btn btn-light border rounded ml-auto action-button" role="button" href="{{url('logout')}}" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 80px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>Выход</strong></a>
                @else
                <span class="navbar-text" style="margin: 0px 10px 0px 20px;">
                    <a id="loginclick" class="text-right text-primary login" href="javascript:loginform();" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38px; font-size: 14px;width: 14px;"><strong>{{$login}}</strong></a>
                </span>
                <a class="btn btn-light border rounded ml-auto action-button" role="button" href="javascript:regform();" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 120px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>{{$registration}}</strong></a>
                @endif

            </div>
    </div>
</nav>

@yield('content' )


<div class="footer-clean" style="background-color: #da9904;margin: 0px;height: auto;padding-top: 5px;padding-bottom: 5px;">
    <footer style="height: auto;">
        <div class="container">
            <div class="row justify-content-center" style="height: auto;">
                <div class="col-sm-4 col-md-3 item" style="height: auto; color: #ffffff;">
                    <?php $addresses = GeneralController::getAddress();  ?>
                    {!! $addresses !!}
                </div>
                <div class="col-sm-4 col-md-3 item" style="height: auto;">
                        <p class="copyright" style="color: #ffffff;margin: 13px 0px;"><strong><em>&copy; ZovExpress <span id="year"></span></em></strong></p>
                </div>
                <div class="col-sm-4 col-md-3 item" style="height: auto;padding-top: 5px;padding-bottom: 5px; color: #ffffff;">
                    <?php $links = GeneralController::getLinks();  ?>
                    {!! $links !!}
                </div>
                <div class="col"><a href="#"><img class="float-right" src="assets/img/uparrow.png"></a></div>
            </div>
        </div>
    </footer>
</div>
<div></div>




<div class="modal fade" id="registrationform" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/reg" method="post">
            {{csrf_field()}}
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Регистрация</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="padding-left: 27px;">
                <div class="row">
                    <div class="col">
                        <label style="font-size: 14px; width: 200px;">Email адрес :</label>
                        <input required placeholder="your@email.com" type="email" name="email" value="{{old('email')}}" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Страна проживания :</label>

                        <SELECT id="country"  class="border rounded border-warning"  style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px;font-size: 14px;padding-left:5px; width: 200px;height: 25px;" >
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" selected>Выберите страну:</OPTION>

                            <?php   $countries = CountryController::getList(); ?>

                            @foreach($countries as $country)
                            <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>
                            @if ($country->id != 1)
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>
                            @endif
                            @endforeach
                        </SELECT>

                        <!--                  <input required name="country" placeholder="Страна проживания" value="{{old('country')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 440px;"/> -->
                    </div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Пароль :</label><input required name="password" id="password" onkeyup="check_pass()" minlength="6" class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Подтверждение пароля :</label><input required id="password2" name="password2" onkeyup="check_pass()" minlength="6"  class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Имя :</label><input required minlength="2" placeholder="Ваше Имя" name="firstname" value="{{old('firstname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Фамилия :</label><input required minlength="2" placeholder="Ваша Фамилия" name="lastname" value="{{old('lastname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Отчество :</label><input required minlength="2" placeholder="Ваше Отчество" name="surname" value="{{old('surname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер паспорта :</label><input required name="passport" placeholder="Passport" pattern="[a-zA-Z]{2}[0-9]{7}" value="{{old('passport')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона :</label><input required name="phone" placeholder="+994509999999" pattern="[+]{1}[0-9]{5}[0-9]{7}" value="{{old('phone')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона (доп.):</label><input required name="additionalphone" placeholder="+994509999999" pattern="[+]{1}[0-9]{5}[0-9]{7}" value="{{old('additionalphone')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>


                </div>
                       <!--                <div class="row">-->
<!---->
<!--                    <div class="col">-->
<!--                        <label style="font-size: 14px; width: 200px;">Email адрес :</label>-->
<!--                        <input required placeholder="your@email.com" type="email" name="email" value="{{old('email')}}" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>-->
<!--                    </div>-->
<!--                    <img style="width: 25%; padding: 0px 27px;" src="/assets/img/zovlogo.png"/>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Пароль :</label><input required name="password" id="password" onkeyup="check_pass()" minlength="6" class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Подтверждение пароля :</label><input required id="password2" name="password2" onkeyup="check_pass()" minlength="6"  class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Имя :</label><input required minlength="2" placeholder="Ваше Имя" name="firstname" value="{{old('firstname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Фамилия :</label><input required minlength="2" placeholder="Ваша Фамилия" name="lastname" value="{{old('lastname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Отчество :</label><input required minlength="2" placeholder="Ваше Отчество" name="surname" value="{{old('surname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер паспорта :</label><input required name="passport" placeholder="Passport" pattern="[a-zA-Z]{2}[0-9]{7}" value="{{old('passport')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона :</label><input required name="phone" placeholder="+994509999999" pattern="[+]{1}[0-9]{5}[0-9]{7}" value="{{old('phone')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона (доп.):</label><input required name="additionalphone" placeholder="+994509999999" pattern="[+]{1}[0-9]{5}[0-9]{7}" value="{{old('additionalphone')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
<!--                    <div class="col"><label style="font-size: 14px; width: 200px;">Страна :</label>-->
<!---->
<!--                            <SELECT id="country"  class="border rounded border-warning"  style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px;font-size: 14px;padding-left:5px; width: 442px;height: 25px;" >-->
<!--                                <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" selected>Выберите страну:</OPTION>-->
<!---->
<!--                                --><?php //  $countries = CountryController::getList(); ?>
<!---->
<!--                                @foreach($countries as $country)-->
<!--                                <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>-->
<!--                                @if ($country->id != 1)-->
<!--                                <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>-->
<!--                                @endif-->
<!--                                @endforeach-->
<!---->
<!---->
<!--                            </SELECT>-->
<!--<!--                  <input required name="country" placeholder="Страна проживания" value="{{old('country')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 440px;"/>-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!--                </div>-->

                <div class="form-check" style="margin: 10px 0px;"><input name="agreement" onclick="enablesubmit()"  class="form-check-input" type="checkbox" id="formCheck-1" ><label style="font-size: 14px;" class="form-check-label" for="formCheck-1">Я принимаю <span style="text-decoration: underline;"><a href="{{url('infoagreement')}}" target="_blank"> пользовательское соглашение</a></span></label></div>
                <div class="form-check"><input name="agreement2" class="form-check-input" type="checkbox" id="formCheck-2"><label style="font-size: 14px;" class="form-check-label" for="formCheck-2">Я согласен(-на) на обработку персональных данных и получения информации о товарах и акциях</label></div>
            </div>
            <div class="modal-footer" style="padding-right: 27px;">
                <button onclick="loginform()" class="btn btn-light border rounded border-warning" type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">Зарегистрирован?</button>
                <button id="registersubmit" class="btn btn-white" type="submit" style="font-size: 14px; color:#ffffff; background-color: #da9904;" disabled="disabled" >Продолжить</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="loginform" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/login" method="post">
            {{csrf_field()}}
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Вход</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div style=" width: 49%;  display: inline-block; float:left;">
                        <div class="col">
                            <label style="font-size: 14px; width: 400px;">Email адрес :</label>
                            <input type="email" name="email" value="{{old('email')}}" class="border-warning border rounded" style="font-size: 14px; padding-left:5px;padding-bottom: 0px; width: 200px;"/>
                        </div>

                        <div class="col">
                            <label style="font-size: 14px; width: 400px;">Пароль :</label>
                            <input type="password" name="password" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; padding-bottom: 0px; width: 200px;"/>
                        </div>
                    </div>
                    <div style="padding:0px 5px;width: 49%; display: inline-block; float:right;">
                    <img style="float:right; width: 60%; padding: 0px;" src="assets/img/zovlogo.png"/>
                    </div>
                </div>

                <div class="form-check" style="margin: 10px 0px;">
                    <input class="form-check-input" name="savepassword" type="checkbox" id="formCheck-1" checked>
                    <label style="font-size: 14px;" class="form-check-label" for="formCheck-1">Запомнить</label>
                    <label style="font-size: 14px;float: right;" class="form-check-label">Забыли пароль?</label>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="regform()" class="btn btn-light border rounded border-warning" type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">Регистрация</button>
                <button class="btn btn-white" type="submit" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Продолжить</button>
            </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="codeform" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Получить код</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="row">
                    <form method="post" action="/usercodesave" name="saveusercode">
                    {{ csrf_field() }}
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Пользователь :</label><br/>
                        @if ( Auth::check())
                        <b> {{Auth::user()->firstname}} {{Auth::user()->lastname}} ({{Auth::user()->email}})</b>
                        <input type="hidden" id="userid" name="userid" value="{{Auth::user()->id}}">
                        @endif
                    </div>
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Выберите страну отправки :</label>
                        @if ( Auth::check())
                        <?php   $countries = CountryController::getListWithoutCodesCheck(); ?>
                        <SELECT id="country" class="border rounded border-warning" onchange="javascript:loadinfo(this.value);"
                                style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px; font-size: 13px;width: 200px;height: 25px;" >
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" alt="-1" selected></OPTION>


                            @foreach($countries as $country)
                            <!-- <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>-->
                            @if ($country->id != 1)
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>
                            @endif
                            @endforeach

                            @endif
                        </SELECT>

                    </div>

                        <input type="hidden" id="countryid"  name="countryid" value="">

                        <div class="col">
                            <label style="font-size: 14px; width: 400px;">Выберите тип отправки :</label>

                            <SELECT id="countryinfoid" name="countryinfoid" class="border rounded border-warning" onchange="javascript:getCode(this.value);"
                                    style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px; font-size: 13px;width: 200px;height: 25px;" >
                                <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" alt="-1" selected="selected"></OPTION>

                            </SELECT>

                        </div>

                    <div class="col">
                        <label style="font-size: 14px;width: 400px;">Ваш код отправки :</label>
                        <input type="text" id="code" name="code" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                        <!--<input onclick="saveCode()" style="margin-top:0px; font-size: 12px; height: 25px;" type="button" name="savebutton" class="border-warning border rounded" value="Сохранить"/>-->
                    </div>
                    <div class="col">
                        <label style="font-size: 14px; font-weight: bold;width: 400px;">Внимание! Полученный вами персональный код вы можете использовать на постоянной основе.</label>
                    </div>
                    <div class="col">
                        <label style="font-size: 14px;font-weight: bold; width: 400px;"></label>
                        <button class="btn btn-white" type="submit" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Сохранить</button>
                    </div>
    <br>
                    <div class="col">
                        <label style="font-size: 14px; font-weight: bold;width: 400px; color: red;">Cкопируйте адрес для передачи поставщику :</label>
                        <input type="text" id="code" name="code" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 100%;" value="Address of Sklad in Guanchjou"/>
                        <!--<input onclick="saveCode()" style="margin-top:0px; font-size: 12px; height: 25px;" type="button" name="savebutton" class="border-warning border rounded" value="Сохранить"/>-->
                    </div>


                </div>


            </div>
            <!--
            <div class="modal-footer">
                <button onclick="regform()" class="btn btn-light border rounded border-warning" type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">Регистрация</button>
                <button class="btn btn-white" type="button" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Продолжить</button>
            </div>
            -->
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="assets/js/Simple-Slider.js"></script>


<script type="text/javascript">

    document.getElementById("year").innerHTML = new Date().getFullYear();

   function regform()
    {
        $("#registrationform").modal('show');
    }

   function loginform()
   {
       $("#loginform").modal('show');
   }

   function codeform()
   {
       $("#codeform").modal('show');
   }

   function getCode(countryid)
   {
      // var countryid = $('#country').val();
       var userid = $('#userid').val();
       $('#countryid').val(countryid);
       $('#code').val('...');
       if (countryid !=-1) {
           $.get("{{ URL::to('usercode') }}", {countryid: countryid, userid: userid}, function (data) {
               //alert(data);
               $('#code').val(data);
           })


       }
   }

    function loadinfo(countryid)
    {
       // alert(countryid);
        $('#myinfo').val('...');
        $.get("{{ URL::to('countryinfo') }}",{countryid:countryid}, function(data){
            alert(data);
            //$('#myinfo').val(data);

          /*  var sel = $("#countryinfo");
            sel.empty();
            for (var i=0; i<data.length; i++) {
                sel.append('<option value="' + data[i].code + '">' + data[i].code+'  -  '+ data[i].nameru+ '</option>');
            }*/
        });//, "json");

        $.get("{{ URL::to('countryinfolist') }}",{ countryid:countryid }, function(data){

          //  alert(58);alert(data);
            var sel = $("#countryinfoid");
            sel.empty();
            for (var i=0; i<data.length; i++) {
                sel.append('<option value="' + data[i].infoid + '">' +  data[i].inforu+ '</option>');
            }
        }, "json");

        getCode(countryid);
    }

   function saveCode()
   {
        var countryid = $('#countryid').val();
        var userid =  $('#userid').val();
        var usercode =  $('#code').val();

        alert(countryid+' '+userid+' '+usercode);


       $.get("{{ URL::to('usercodesave') }}",{countryid:countryid, userid:userid, usercode:usercode}, function(data){
           alert(data);
           //$('#code').val(data);
       })
   }

   function getTrackings()
   {
       let codeid = $('#code').val();
       $("#samolet").html('');
       $.get('{{url("cabgettrackings")}}', {codeid: codeid},function(data){
           $("#tracklist").html(data);
       });
   }

   function getSamolet(tracknumber)
   {
      // alert(tracknumber);
       $("#samolet").html('');
       $.get('{{url("cabgetsamolet")}}', {tracknumber: tracknumber},function(data){
           $("#samolet").html(data);
       });

   }

   function calculate()
   {
       var sendcountry = $('#sendcountry').val();
       var fromcountry = $('#fromcountry').val();
       var count = $('#count').val();
       var weight = $('#weight').val();

       var count = parseFloat(count);
       if (isNaN(count)) {
           $("#warning").text("не правильное количество!!!");
           return 0;
       }

       var weight = parseFloat(weight);
       if (isNaN(weight)) {
           $("#warning").text("не правильный вес!!!");
           return 0;
       }

            // it's something else
           $("#warning").text(" ");
           $.get("{{ URL::to('/calculate') }}", {
               sendcountry: sendcountry,
               fromcountry: fromcountry,
               count: count,
               weight: weight
           }, function (data) {

               $("#result").text(data);
           })

   }

    function toNumber(str) {
        return str*1;
    }

   function enablesubmit()
   {

       if ($('#formCheck-1').is(":checked"))
       {
           // it is checked
           check_pass()
           }
       else
       {
           $("#registersubmit").prop('disabled', true);
       }

   }


   function check_pass() {

       var pass = $('#password').val();
       var pass2 = $('#password2').val();

       //alert(pass+' '+pass2);

       if (  ( pass.length  >= 6 ) && ( pass2.length  >= 6 )  ){
           check(pass, pass2);
       }
       else {
           $("#registersubmit").prop('disabled', true);
       }
   }

   function check(pass, pass2) {
        //alert(5);

       if (pass === pass2) {
           if  ($('#formCheck-1').is(":checked"))
                $("#registersubmit").prop('disabled', false);
       } else {
           $("#registersubmit").prop('disabled', true);
       }
   }

</script>


