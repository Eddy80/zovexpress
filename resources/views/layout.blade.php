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
    <title>zovexpress</title>
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
</head>

<body>
<div>
    <div class="header-dark" style="margin: 0px;background-image: url(&quot;transparent&quot;);background-color: rgb(68,66,66);padding: 0px;">
        <div></div>
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color: #212a39;padding: 10px 0px 10px 0px;margin: 0 auto;">
            <div class="container">
                    <input type="image" alt="" style="border-image-width: 0px; border-width: 0px; border-color: #1b1e21; width: 73px;height: 52px;" src="/assets/img/logo.png"/><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1" style="padding: 0px 5px 0px 0px;">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="/" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menuabout}}</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="rubberBand" style="font-size: 14px;width: 55;">{{$menuinfo}}</a>
                            <div class="dropdown-menu" role="menu" style="background-color: #1f2938;height: 95px;padding: 10px;">
                                <a class="dropdown-item" role="presentation" href="{{url('infosending')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub1}}</a>
                                <a class="dropdown-item" role="presentation" href="{{url('forbidden')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub2}}</a>
                                <a class="dropdown-item" role="presentation" href="{{url('infotracking')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub3}}</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucalculator}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tracking')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menutracking}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('reviews')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menureviews}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('contact')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucontact}}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tasco')}}" data-bs-hover-animate="tada" style="color: #da9904;font-size: 14px;"><strong>{{$menutasco}}</strong></a></li>
                    </ul>
                    @if (Auth::check())
                    <span class="navbar-text" style="margin: 0px 10px 0px 50px;">
                        <a class="text-right text-primary login" href="{{url('cab')}}" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38px;font-size: 14px;width: 17px;"><strong>Кабинет</strong></a>
                    </span>
                    <a class="btn btn-light border rounded ml-auto action-button" role="button" href="{{url('logout')}}" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 80px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>Выход</strong></a>


                    @else
                    <span class="navbar-text" style="margin: 0px 10px 0px 50px;">
                        <a class="text-right text-primary login" href="javascript:loginform();" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38 px;font-size: 14px;width: 14px;"><strong>{{$login}}</strong></a>
                    </span>
                    <a class="btn btn-light border rounded ml-auto action-button" role="button" href="javascript:regform();" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 140px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>{{$registration}}</strong></a>

                    @endif
                </div>
            </div>
        </nav>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

@yield('content' )


<div class="footer-clean" style="background-color: #da9904;margin: 0px;height: 90px;padding: 0px 0px;">
    <footer style="height: 85px;">
        <div class="container">
            <div class="row justify-content-center" style="height: 45px;">
                <div class="col-sm-4 col-md-3 item" style="height: 85px;">
                    <h3 style="color: #ffffff;padding: 10px 0px;font-size: 14px;margin: 0px;">Ünvan: Əhməd Rəcəbli 14 a</h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li style="width: 720px;"><a href="#"></a></li>
                        <li style="margin: 10px 0px;"><a href="#" style="color: #ffffff;"><strong>Tel: </strong>+994505351980</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item" style="height: 85px;">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="copyright" style="color: #ffffff;margin: 10px 0px;"><strong><em>ZovExpress © 2019</em></strong></p>
                </div>
                <div class="col-sm-4 col-md-3 item" style="height: 85px;">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col"><img class="float-right" src="assets/img/uparrow.png"></div>
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
                        <input type="email" name="email" value="{{old('email')}}" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>
                    <img style="width: 25%; padding: 0px 27px;" src="/assets/img/zovlogo.png"/>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Пароль :</label><input name="password" class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Подтверждение пароля :</label><input name="password2" class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Имя :</label><input name="firstname" value="{{old('firstname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Фамилия :</label><input name="lastname" value="{{old('lastname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона :</label><input name="phone" value="{{old('phone')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер пасспорта :</label><input name="passport" value="{{old('passport')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                </div>

                <div class="form-check" style="margin: 10px 0px;"><input name="agreement" class="form-check-input" type="checkbox" id="formCheck-1"><label style="font-size: 14px;" class="form-check-label" for="formCheck-1">Я принимаю <span style="text-decoration: underline;"><a href="{{url('infoagreement')}}" target="_blank"> пользовательское соглашение</a></span></label></div>
                <div class="form-check"><input name="agreement2" class="form-check-input" type="checkbox" id="formCheck-2"><label style="font-size: 14px;" class="form-check-label" for="formCheck-2">Я согласен(-на) на обработку персональных данных и получения информации о товарах и акциях</label></div>
            </div>
            <div class="modal-footer" style="padding-right: 27px;">
                <button onclick="loginform()" class="btn btn-light border rounded border-warning" type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">Зарегистрирован?</button>
                <button class="btn btn-white" type="submit" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Продолжить</button>
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
                    <input class="form-check-input" name="savepassword" type="checkbox" id="formCheck-1">
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
                    {{ csrf_field() }}
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Пользователь :</label><br/>
                        @if ( Auth::check())
                        <b> {{Auth::user()->firstname}} {{Auth::user()->lastname}} ({{Auth::user()->email}})</b>
                        <input type="hidden" id="userid" value="{{Auth::user()->id}}">
                        @endif
                    </div>
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Выберите страну отправки :</label>
                        <SELECT id="country" class="border rounded border-warning" onchange="javascript:getCode();"
                                style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px; font-size: 13px;width: 200px;height: 25px;" >
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" selected></OPTION>
                            <?php   $countries = CountryController::getList(); ?>

                            @foreach($countries as $country)
                            <!-- <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>-->
                            @if ($country->id != 1)
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>
                            @endif
                            @endforeach
                        </SELECT>
                    </div>

                    <div class="col">
                        <label style="font-size: 14px;font-weight: bold; width: 400px;">Ваш код отправки :</label>
                        <input type="text" id="code" name="code" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
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



   /* $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }*/
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

   function getCode()
   {
       var countryid = $('#country').val();
       var userid = $('#userid').val();

       $('#code').val('...');

       $.get("{{ URL::to('usercode') }}",{countryid:countryid, userid:userid}, function(data){

           $('#code').val(data);
       })
   }

   /*
   function saveCode()
   {
       var code = $('#code').val();
      // var userid = $('#userid').val();

       alert(1);
       $.get("{{ URL::to('usercode') }}",{usercode:code}, function(data){
            alert(data);
           $("#codeform").modal('hide');
       })
   }*/

   function calculate()
   {
       var sendcountry = $('#sendcountry').val();
       var fromcountry = $('#fromcountry').val();
       var count = $('#count').val();
       var weight = $('#weight').val();

       $.get("{{ URL::to('calculate') }}",{sendcountry:sendcountry, fromcountry:fromcountry, count:count, weight:weight}, function(data){
           $('#result').empty().html(data);
       })
   }
</script>


