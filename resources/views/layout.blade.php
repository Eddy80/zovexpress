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
    <title>ZovExpress</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="assets/logotip.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"> -->
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">

    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <!-- <link rel="stylesheet" href="assets/css/topmenu.css"> -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-1.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/swipermy.css">
    <link rel="stylesheet" href="assets/css/swiper.css">

  
    <link rel="stylesheet" href="assets/css/Team-Grid.css">

    <link rel="stylesheet" href="assets/css/styles.css">

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



<body style="background-color: transparent;height: 544px;">
    <div style=" box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 0;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-0"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-0" style="font-size: 11px; display:inline-block;">
                <ul class="nav navbar-nav ml-auto" >
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family: Roboto;font-size: 11px;color: #7F7F7F;"> <span style="color: #DF0707;"><u>VIP</u></span> <span>Bonus Card</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family: Roboto;font-size: 11px;color: #1E4888;"><u>Услуга "Экспресс заказ"</u></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family: Roboto;font-size: 11px;color: #7F7F7F;">Промокод<br></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family: Roboto;font-size: 11px;color: #7F7F7F;">Заказать курьера<br></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-family: Roboto;font-size: 11px;color: #7F7F7F;">Друг в ZovExpress<br></a></li>
                    <li class="nav-item" role="presentation" style="margin-right:281px;">&nbsp;</li>
                </u>
                <ul class="nav navbar-nav mr-auto" >
                    <li class="nav-item dropdown" style="font-family: Roboto;font-size: 10px;"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="text-decoration: none;"><strong>RU</strong></a>
                        <div class="dropdown-menu" role="menu" style="font-size: 10px;">
                            <a class="dropdown-item" role="presentation" href="#"><strong>RU</strong></a>
                            <a class="dropdown-item" role="presentation" href="#"><strong>EN</strong></a>
                            <a class="dropdown-item" role="presentation" href="#"><strong>AZ</strong></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="padding-top: 35px;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="{{url('home')}}"><img src="assets/img/logo.png" style="margin-top:-85px; padding: -96px 0px;margin-right: 20px;"/></a>
            <div  class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('about')}}" style="font-family: Roboto;font-size: 13px;color: #0f3c80;margin-left: 0px;">{{$menuabout}}</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('underconstruction')}}" style="font-family: Roboto;font-size: 13px;color: #0f3c80;">Как мы работаем</a></li>
                    @if ( Auth::check())
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('tracking')}}" style="font-family: Roboto;font-size: 13px;color: #0f3c80;">{{$menutracking}}</a></li>
                    @else
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('infotracking')}}" style="font-family: Roboto;font-size: 13px;color: #0f3c80;">{{$menutracking}}</a></li>
                    @endif
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('contact')}}" style="font-family: Roboto;font-size: 13px;color: #0f3c80;">{{$menucontact}}</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('underconstruction')}}" style="font-family: Roboto;font-size: 13px;color: #0f3c80;">F.A.Q.</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"  href="{{url('tasco')}}" style="font-family: Roboto;font-size: 13px;color: #DF0707;"><strong><u>Магазины {{$menutasco}}</u></strong></a>
                        <!-- <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">First Item</a>
                            <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                            <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                        </div> -->
                    </li>
                </ul>
                <span class="navbar-text actions"> 
                @if (Auth::check())
                <a class="text-right text-primary login" href="{{url('cab')}}" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38px;font-size: 14px;width: 17px;font-family: Roboto;font-size: 13px;"><strong>Кабинет</strong></a>
                <a class="btn btn-light border rounded ml-auto action-button" role="button" href="{{url('logout')}}" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 80px;height: 31px;padding: 3px 3px 3px 3px;font-family: Roboto;font-size: 13px;"><strong>Выход</strong></a>
                @else
                <a class="login" href="javascript:loginform();" style="color: #423E3E;font-family: Roboto;font-size: 13px;">{{$login}}</a>
                <a class="btn btn-light border rounded action-button" role="button" href="javascript:regform();" style="font-family: Roboto;font-size: 13px;background-color: #D79729;border-radius: 6px;padding-top: 5px;margin-right:15px;">{{$registration}}</a>
                @endif
                <a class="login" href="javascript:korzina();" style="display:inline-block;color: #423E3E;font-family: Roboto;font-size: 13px; ">
                    корзина &nbsp;
                    <img src="assets/img/korzina.png"/>
                    <div style="float:right;margin-top:15px;background-color:#DF0707; color:#fff;border-radius: 50%!important;width:20px;height:20px;text-align:center; margin-left:-6px;">0</div>
                </a>

                </span>
               </div>
        </div>
    </nav>
    </div>
                    <!--                   
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="rubberBand" style="font-size: 14px;width: auto;">{{$menuinfo}}</a>
                        <div class="dropdown-menu" role="menu" style="background-color: #1f2938;height: 95px;padding: 10px;">
                            <a class="dropdown-item" role="presentation" href="{{url('infosending')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub1}}</a>
                            <a class="dropdown-item" role="presentation" href="{{url('forbidden')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub2}}</a>
                            <a class="dropdown-item" role="presentation" href="{{url('infotracking')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">{{$menusub3}}</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menucalculator}}</a></li>             
                    <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('reviews')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">{{$menureviews}}</a></li>
                    -->


@yield('content' )

<div class="footer-clean" style="background-color: #DF0707;color: #fff; margin-top:7px;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <div style="font-family: Roboto, sans-serif;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;color: #fff; margin-bottom: 50px;">
                        Наши <br>филиалы
                    </div>
                        
                    </div>
                    <div class="col-sm-4 col-md-3 item"></div>
                    <div class="col-sm-4 col-md-3 item"></div>
                    <div class="col-lg-3 item social" style="font-family: Roboto, sans-serif;">
                    <?php /* $links = GeneralController::getLinks(); {!!  $links !!} */?>
                    
                        <a href="https://t.me/zov_express"><img src="assets/img/telegram.png"></a>
                        <a href="@zov_express"><img src="assets/img/instagram.png"></a>
                        <a href="#"><img src="assets/img/facebook.png"></a>
                        <a href="#"><img src="assets/img/youtube.png"></a>
                        <!-- <a href="#"><i class="icon ion-social-instagram"></i></a>
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                        <a href="#"><i class="icon ion-social-youtube"></i></a> -->
                        <p class="copyright">ZovExpress © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row" style="font-family: Roboto, sans-serif;">
                        <?php $addresses = GeneralController::getAddress();  ?>
                            {!! $addresses !!}
                            <!-- 					 
                                 <div class="col-2" style="font-style: normal; margin-bottom:20px; margin-right:20px;
								 font-size: 13px;line-height: 20px;">
	                             <strong>Офис в Казахстане:</strong> <br><strong>Aдрес:</strong> Алматы,<br> ул. Досмухамедова 117<br> 
	                             <strong>Тел.:</strong> +7 777 0151540
	                             </div>
	 
	                             <div class="col-2" style="font-style: normal;margin-bottom:20px;margin-right:20px;
	                             font-size: 13px;line-height: 20px;">
	                             <strong>Офис в Кыргызстане:</strong> <br><strong>Aдрес:</strong> Бишкек,<br> ул. Ибраимова 42<br> 
	                             <strong>Тел.:</strong> +996 50 4901601
	                             </div>
	 
	                             <div class="col-2" style="font-style: normal;margin-bottom:20px;margin-right:20px;
	                             font-size: 13px;line-height: 20px;">
	                             <strong>Офис в России:</strong> <br><strong>Aдрес:</strong> Москва, <br> ТЦ Садовод<br> <strong>Тел.:</strong> +7 926 2398888
	                             </div>
	 
	                             <div class="col-2" style="font-style: normal;margin-bottom:20px;margin-right:20px;
	                             font-size: 13px;line-height: 20px;">
	                             <strong>Офис в Азербайджане:</strong> <br><strong>Aдрес:</strong> Баку,<br> пр. Нобеля 175<br> <strong>Тел.:</strong> +994 55 6161619
	                             </div>
	 
                            
                        
                        </div>
                    </div>
                    
                    <div class="col-lg-0" style="background-color: green; "></div>
                </div>
            </div>
        </footer>
    </div>
    <div class="team-clean"></div>






<div class="modal fade" id="registrationform" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/reg" method="post">
            {{csrf_field()}}
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;margin-right: 15px;">Регистрация</h4>
                <div id="kod"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" style="padding-left: 27px;">
                <div class="row">
                    <div class="col">
                        <input  type="hidden" name="userkod" id="userkod" value="" />
                        <label style="font-size: 14px; width: 200px;">Email адрес :</label>
                        <input required placeholder="your@email.com" type="email" name="email" id="email"  value="{{old('email')}}" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Страна проживания :</label>

                        <SELECT id="country"  class="border rounded border-warning"  style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px;font-size: 14px;padding-left:5px; width: 200px;height: 25px;" >
                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" selected>Выберите страну:</OPTION>

                            <?php   $countries = CountryController::getList(); ?>

                            @foreach($countries as $country)
                            <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>

                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>

                            @endforeach
                        </SELECT>

                        <!--                  <input required name="country" placeholder="Страна проживания" value="{{old('country')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 440px;"/> -->
                    </div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Пароль :</label><input required name="password" id="password" onkeyup="check_pass()" minlength="6" class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Подтверждение пароля :</label><input required id="password2" name="password2" onkeyup="check_pass()" minlength="6"  class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Имя :</label><input required minlength="2" placeholder="Ваше Имя" name="firstname" value="{{old('firstname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Фамилия :</label><input required minlength="2" placeholder="Ваша Фамилия" name="lastname" value="{{old('lastname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Отчество :</label><input required minlength="2" placeholder="Ваше Отчество" name="surname" value="{{old('surname')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                  <!---  <div class="col"><label style="font-size: 14px; width: 200px;">Номер паспорта :</label><input required name="passport" placeholder="Passport" pattern="[a-zA-Z]{2}[0-9]{7}" value="{{old('passport')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>-->
                    <input type="hidden" id="passport"  name="passport" value="AZE000000">
                    <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона :</label><input required name="phone" placeholder="+994509999999"  value="{{old('phone')}}" class="border-warning border rounded" type="tel" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <!---  <div class="col"><label style="font-size: 14px; width: 200px;">Номер телефона (доп.):</label><input required name="additionalphone" placeholder="+994509999999" pattern="[+]{1}[0-9]{5}[0-9]{7}" value="{{old('additionalphone')}}" class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div> -->


                  </div>


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

                            <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>

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
                        <input type="text" required id="code" name="code" class="border-warning border rounded" style="font-weight:bold; font-size: 14px; padding-left:5px; width: 200px;"/>
                        <!--<input onclick="saveCode()" style="margin-top:0px; font-size: 12px; height: 25px;" type="button" name="savebutton" class="border-warning border rounded" value="Сохранить"/>-->
                    </div>
                    <div class="col">
                        <label style="font-size: 14px; font-weight: bold;width: 400px;">Внимание! Полученный вами персональный код вы можете использовать на постоянной основе.</label>
                    </div>
                    <div class="col">
                        <label style="font-size: 14px;font-weight: bold; width: 400px;"></label>
                        <button class="btn btn-white" type="submit" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Сохранить</button>
                    </div>
                    </form>


                    <br/>
                    <div class="col" style="text-align: left;width: 400px;">
                        <label style="font-size: 14px;width: 450px;">Страна отправитель:</label>
                        <input type="radio" name="FromCountry" id="FromCountry" value="CN" style="text-align: left; font-size: 12px; font-weight: bold; width: 30px; color:#000000;" checked onclick="loadaddress(0);">Китай &nbsp;
                        <input type="radio" name="FromCountry" id="FromCountry" value="TR" style="text-align: left; font-size: 12px; font-weight: bold; width: 30px; color:#000000;" onclick="loadaddress(1);">Турция
                    </div>
                    <br/>
                    <div class="col">
                        <label style="font-size: 14px; font-weight: bold; color: red;width: 450px;"><br/>Cкопируйте адрес для передачи поставщику :</label>
                    </div>
                    <div class="col" id="copyaddress">
                        <input type="text" id="ouraddress" name="ouraddress" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 95%" value="广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库。13145748283"/>
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


<div class="modal fade" id="codeformwithoutreg" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Получить код</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="row">
                    <form method="post" action="/usercodesavewithoutreg" name="saveusercode">
                        {{ csrf_field() }}

                        <div class="col">
                            <label style="font-size: 14px;width: 200px;">Введите ваш <b>Email</b> :</label>
                            <input type="text" id="emailorphonenumberwr" required name="emailorphonenumberwr" class="border-warning border rounded" style="font-weight:bold;font-size: 14px; padding-left:5px; width: 200px;"/>
                            <!--<input onclick="saveCode()" style="margin-top:0px; font-size: 12px; height: 25px;" type="button" name="savebutton" class="border-warning border rounded" value="Сохранить"/>-->
                        </div>
                        <div class="col">
                            <label style="font-size: 14px; width: 200px;">Выберите страну отправки :</label>

                            <?php   $countries = CountryController::getListWithoutCodesCheck(); ?>
                            <SELECT id="country" name="country"  class="border rounded border-warning" onchange="javascript:loadinfowr(this.value);"
                                    style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px; font-size: 13px;width: 200px;height: 25px;" >
                                <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" alt="-1" selected></OPTION>


                                @foreach($countries as $country)
                                <!-- <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>-->

                                <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="{{$country->id}}">{{$country->nameru}}</OPTION>

                                @endforeach


                            </SELECT>

                        </div>

                        <input type="hidden" id="firstname"  name="firstname" value="demofirst">
                        <input type="hidden" id="lastname"  name="lastname" value="demolast">
                        <input type="hidden" id="passport"  name="passport" value="AZE000000">

                        <input type="hidden" id="countryid"  name="countryid" value="">

                        <div class="col">
                            <label style="font-size: 14px; width: 200px;">Выберите тип отправки :</label>

                            <SELECT id="countryinfoidwr" name="countryinfoidwr" class="border rounded border-warning" onchange="javascript:getCodewr(this.value);"
                                    style="-moz-appearance:none; -webkit-appearance: none;padding-left:5px; font-size: 13px;width: 200px;height: 25px;" >
                                <OPTION style="background-color: #DA9904; width: auto;border-color: #FFC107; border-radius: 5px; font-size: 13px;" value="-1" alt="-1" selected="selected"></OPTION>

                            </SELECT>

                        </div>



                        <div class="col">
                            <label style="font-size: 14px;width: 200px;">Ваш код отправки :</label>
                            <input type="text" id="codewr" required name="codewr" class="border-warning border rounded" style="font-weight:bold;font-size: 14px; padding-left:5px; width: 200px;"/>
                            <!--<input onclick="saveCode()" style="margin-top:0px; font-size: 12px; height: 25px;" type="button" name="savebutton" class="border-warning border rounded" value="Сохранить"/>-->
                        </div>

<!--                        <div class="col">-->
<!--                            <label style="font-size: 16px; width: 200px ; color: #da9904; font-weight: bold;">-->
<!--                                <div id='#codewrinform>Поздравляем!!!</div>-->
<!--                                <input type="codewrinfo" id="codewrinfo" required name="codewr" class="border-warning border rounded" style="font-weight:bold;font-size: 14px; padding-left:5px; width: 200px;"/>-->
<!--                            </label>-->
<!--                        </div>-->


                        <div class="col">
                            <label style="font-size: 14px; width: 200px;"><br/>
                                <span style="color: #da070c; font-weight: bold;">Внимание!!!</span> &nbsp;Если хотите отслеживать посылки по коду,  <span style="color: #da9904; font-weight: bold;">  Регистрируйтесь</span></label>
                        </div>
                        <div class="col" style="text-align: center; width: 100%">
                            <label style="font-size: 14px;font-weight: bold; width: 400px; "></label>
    <!--                            <button class="btn btn-white" type="submit" style=" float:left; margin-right:45px; margin-bottom: 10px; width: 200px;border-width: 1px; border-color:#da9904; font-size: 14px; color:#da9904; background-color: #ffffff;">Сохранить</button>-->

                            <button onclick="javascript:regform(1);" data-dismiss="modal" class="btn btn-white" type="button" style="text-align: center; width: 200px;font-size: 14px; font-weight: bold; color:#ffffff; background-color: #da9904;">Зарегистрироваться</button>
                        </div>
                        <br/>
                        <div class="col" style="text-align: left;">
                            <label style="font-size: 14px;width: 200px;">Страна отправитель:</label>
                            <input type="radio" name="FromCountry" id="FromCountry" value="CN" style="text-align: left; font-size: 12px; font-weight: bold; width: 30px; color:#000000;" checked onclick="loadaddress2(0);">Китай &nbsp;
                            <input type="radio" name="FromCountry" id="FromCountry" value="TR" style="text-align: left; font-size: 12px; font-weight: bold; width: 30px; color:#000000;" onclick="loadaddress2(1);">Турция
                        </div>
                        <div class="col">
                            <label style="font-size: 14px; font-weight: bold; color: red;"><br/>Cкопируйте адрес для передачи поставщику :</label>
                        </div>
                        <div class="col" id="copyaddress2">
                            <input type="text" id="ouraddress2" name="ouraddress2" class="border-warning border rounded"
                                   style="font-size: 14px; padding-left:5px; width: 95%" value="(Ваш код)广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库 Тел: 13145748283"/>
                         <!--   //广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库。13145748283 -->
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


<div class="modal fade" id="alertcountryinfo" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Информация</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label style="font-size: 14px;  font-weight: bold;color: #da9904;">
                            <div id='#alertcountryinfotext'></div>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="infokodform" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Информация</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="row">
                        <div class="col">
                            <label style="font-size: 14px;  font-weight: bold;">
                                <div id='#codewrinform'><span style="color: #da9904;">Поздравляем!!!</span> Вам выдан Код для быстрого старта.<br/>На ваш email адрес отправили информацию об этом.</div>
                            </label>
                        </div>
                 </div>
            </div>

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


    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                console.log("Checkbox is checked.");
                isexpress(1);
            }
            else if($(this).prop("checked") == false){
                console.log("Checkbox is unchecked.");
                isexpress(0);
            }
        });
    });

    var userkod=-1;
    var useremailorphone = "";

    document.getElementById("year").innerHTML = new Date().getFullYear();

   function regform(param)
    {

        $("#registrationform").modal('show');
        if (param ==1) {
            $("#kod").text("  ( Ваш код: " + userkod + " )");
            $("#userkod").val(userkod);
            $("email").val(useremailorphone);
        }
        else
        {
            $("#kod").text("");
            $("#userkod").val(-1);
        }

    }

    function loadaddress(param) {

      //  alert(param);
        if (param === 0) {
            //  alert(0);
            $("#ouraddress").val("(Ваш код)广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库 Тел: 13145748283");
            $("#copyaddress").html('<input type="text" id="ouraddress" name="ouraddress" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 95%" value="(Ваш код)广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库 Тел: 13145748283"/>');
        } else {
            if (param === 1) {//if (param==1) {
                // alert(1);
                $("#ouraddress").val("Şehir: Istanbul. İlçe: Fatih. Adres: (Ваш код)Langa Karakolu No:11. Semt/Mahalle:Katıp Kasım. Adres tarifi:Kuran Otelin iki sokak arkası Langa Polis karakol sokağı Seda otelin karşısında. Tel: (506) 147-93-99. 34728 - почтовый индекс ");
                $("#copyaddress").html('<input type="text" id="ouraddress" name="ouraddress" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 95%" value="Şehir: Istanbul. İlçe: Fatih. Adres: (Ваш код)Langa Karakolu No:11. Semt/Mahalle:Katıp Kasım. Adres tarifi:Kuran Otelin iki sokak arkası Langa Polis karakol sokağı Seda otelin karşısında. Tel: (506) 147-93-99. 34728 - почтовый индекс "/>');
            }
        }

    }

    function loadaddress2(param) {

       // alert(param);
        if (param === 0) {
            //  alert(0);
            $("#ouraddress2").val("(Ваш код)广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库 Тел: 13145748283");
            $("#copyaddress2").html('<input type="text" id="ouraddress" name="ouraddress" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 95%" value="(Ваш код)广州市荔湾区环市西路宇宙鞋城D区503A—505  398G库 Тел: 13145748283"/>');
        } else {
            if (param === 1) {//if (param==1) {
                // alert(1);
                $("#ouraddress2").val("Şehir: Istanbul. İlçe: Fatih. Adres: (Ваш код)Langa Karakolu No:11. Semt/Mahalle:Katıp Kasım. Adres tarifi:Kuran Otelin iki sokak arkası Langa Polis karakol sokağı Seda otelin karşısında. Tel: (506) 147-93-99. 34728 - почтовый индекс ");
                $("#copyaddress2").html('<input type="text" id="ouraddress" name="ouraddress" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 95%" value="Şehir: Istanbul. İlçe: Fatih. Adres: (Ваш код)Langa Karakolu No:11. Semt/Mahalle:Katıp Kasım. Adres tarifi:Kuran Otelin iki sokak arkası Langa Polis karakol sokağı Seda otelin karşısında. Tel: (506) 147-93-99. 34728 - почтовый индекс "/>');
            }
        }

    }

   function loginform()
   {
       $("#loginform").modal('show');
   }

    function infokod()
    {
        $("#infokodform").modal('show');
    }



    function alertcountryinfo(data)
    {
        $("#alertcountryinfo").modal('show');
        $('#alertcountryinfotext').text(data);
    }

   function codeform()
   {
       $("#codeform").modal('show');
   }

    function codeformwithoutreg()
    {
        $("#codeformwithoutreg").modal('show');
    }


    function getCode(countryinfo)
    {
        var countryid = $('#countryid').val();
        var userid = $('#userid').val();

        $('#code').val('');
        if (countryid !=-1) {
            $.get("{{ URL::to('usercode') }}", {countryid: countryid,countryinfo:countryinfo, userid: userid}, function (data) {
                //alert(data);
                $('#code').val(data);
            })
        }
    }
    function getCodewr(countryinfo)
    {
        var emailorphone = $('#emailorphonenumberwr').val();
        if ( ( emailorphone == null ) || (emailorphone == '') )
        {
            alert('Email или Мобильный номер не ввели !');
            return 0;
        }

        var countryid = $('#countryid').val();
        var userid = $('#userid').val();

        $('#codewr').val('');
        if (countryid !=-1) {
            $.get("{{ URL::to('usercode') }}", {countryid: countryid,countryinfo:countryinfo, userid: userid}, function (data) {

                var userkod = data;
                emailorphone = $('#emailorphonenumberwr').val();

                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var passport = $('#passport').val();

                $.post("{{ URL::to('regsimple') }}", {email:emailorphone, firstname:  firstname, lastname:lastname, passport:passport, password:'12345678', phone:'+994509999999', userkod:userkod, countryid: countryid,countryinfo:countryinfo, userid: userid}, function (datareg) {

                    if (datareg==-999) {
                        alert("Этот email адрес (" + emailorphone + ") уже зарегистрирован !!!");
                        $('#codewr').val("");
                        $('#country').val('');
                        $('#countrywr').val('');
                        $('#countryid').val('');
                        $('#countryidwr').val('');
                        $('#countryinfoidwr').val('');
                    }
                    else {
                        $('#codewr').val(data);
                        infokod();

                    }

                })
            })


        }
    }


    function loadinfowr(countryid)
    {
        $('#countryid').val(countryid);
        $('#codewr').val('');
        $('#myinfo').val('...');
        $.get("{{ URL::to('countryinfo') }}",{countryid:countryid}, function(data){

        });//, "json");

        $.get("{{ URL::to('countryinfolist') }}",{ countryid:countryid }, function(data){
            var sel = $("#countryinfoidwr");
            sel.empty();
            for (var i=0; i<data.length; i++) {
                if (i==0)
                    sel.append('<option value="' + data[i].infoid + '" selected>' +  data[i].inforu+ '</option>');
                else
                sel.append('<option value="' + data[i].infoid + '">' +  data[i].inforu+ '</option>');
            }
        }, "json");


        getCodewr(1);
    }

    function loadinfo(countryid)
    {
        $('#countryid').val(countryid);
        $('#code').val('');
        $('#myinfo').val('...');
        $.get("{{ URL::to('countryinfo') }}",{countryid:countryid}, function(data){
            alert(data);

        });//, "json");

        $.get("{{ URL::to('countryinfolist') }}",{ countryid:countryid }, function(data){
            var sel = $("#countryinfoid");
            sel.empty();
            for (var i=0; i<data.length; i++) {
                if (i==0)
                    sel.append('<option value="' + data[i].infoid + '" selected>' +  data[i].inforu+ '</option>');
                else
                    sel.append('<option value="' + data[i].infoid + '">' +  data[i].inforu+ '</option>');
            }
        }, "json");

        getCode(1);
    }

   function saveCode()
   {
        var countryid = $('#countryid').val();
        var userid =  $('#userid').val();
        var usercode =  $('#code').val();

        alert(countryid+' '+userid+' '+usercode);

       $.get("{{ URL::to('usercodesave') }}",{countryid:countryid, userid:userid, usercode:usercode}, function(data){
           alert(data);
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

   function getSamolet(tracknumber, otpravkaid, nowpercent)
   {
     //  alert(tracknumber+'  '+otpravkaid+'  '+nowpercent);

    var left = 30;
    if (nowpercent >=0 && nowpercent < 25)
        left = 30;
    else if (nowpercent >=25 && nowpercent < 50)
        left = 190;
    else if (nowpercent >=50 && nowpercent < 75)
        left = 420;
    else if (nowpercent >=75 && nowpercent < 100)
        left = 650;
    else
        left = 830;


        var createdStyleTag = document.createElement("style");
           /* createdStyleTag.textContent =   "@keyframes vehicle{"+
                                            "from { left: 30px; }"+
                                            "to{ left: 250px; }"+
                                            "}"+
                                            "@-moz-keyframes vehicle{"+
                                            "from { left: 30px; }"+
                                            "to{ left: 250px; }"+
                                            "}"+
                                            "@-webkit-keyframes vehicle{"+
                                            "from { left: 30px; }"+
                                            "to{ left: 250px; }"+
                                            "}";*/

            createdStyleTag.textContent =   "@keyframes vehicle{"+
                                            "from { left: 30px; }"+
                                            "to{ left: "+left.toString()+"px; }"+
                                            "}"+
                                            "@-moz-keyframes vehicle{"+
                                            "from { left: 30px; }"+
                                            "to{ left: "+left.toString()+"px; }"+
                                            "}"+
                                            "@-webkit-keyframes vehicle{"+
                                            "from { left: 30px; }"+
                                            "to{ left: "+left.toString()+"px; }"+
                                            "}";




            document.body.appendChild(createdStyleTag);


       $("#samolet").html('');
       $.get('{{url("cabgetsamolet")}}', {tracknumber: tracknumber, otpravkaid:otpravkaid},function(data){
           $("#samolet").html(data);
       });

   }



   function calculate()
   {


       var sendcountry = $('#sendcountry').val();
       var fromcountry = $('#fromcountry').val();
       var countryinfoid = $('#countryinfoid').val();
      // var count = $('#count').val();
       var weight = $('#weight').val();



       var weight = parseFloat(weight);
       if (isNaN(weight)) {
           $("#warning").text("не правильный вес!!!");
           return 0;
       }

       if (countryinfoid==2){
           $("#result").html(0);
           $("#warning").html("Для калькуляции цены \"Авто\" посылок: <br/>Просим связаться с менеджерами");
           $crisp.push(['do', 'chat:open'])
           return 0;
       }


           $("#warning").text(" ");
           $('#wait').show();
           $.get("{{ URL::to('/calculate') }}", {
               sendcountry: sendcountry,
               fromcountry: fromcountry,
               countryinfoid: countryinfoid,
              // count: count,
               weight: weight
           }, function (data) {
               // alert(data);
               if (data !=-1)
               $("#result").html(data);
               else {
                   $("#result").html(0);
                   $("#warning").text("Просим связаться с менеджерами");
               }
               $('#wait').hide();
           })

   }

   function loadreceivecountries(sendercountry) {

       $.get("{{ URL::to('getreceivecountryiesbysendercountryid') }}",{ sendercountryid:sendercountry }, function(data){
           var sel = $("#sendcountry");
           sel.empty();
           for (var i=0; i<data.length; i++) {
               if (i==0)
                   sel.append('<option value="' + data[i].id + '" selected>' +  data[i].nameru+ '</option>');
               else
                   sel.append('<option value="' + data[i].id + '">' +  data[i].inforu+ '</option>');
           }nameru
       }, "json");
   }

    function toNumber(str) {
        return str*1;
    }

   function enablesubmit()
   {

       if ($('#formCheck-1').is(":checked"))
       {

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



       if (  ( pass.length  >= 6 ) && ( pass2.length  >= 6 )  ){
           check(pass, pass2);
       }
       else {
           $("#registersubmit").prop('disabled', true);
       }
   }

   function check(pass, pass2) {


       if (pass === pass2) {
           if  ($('#formCheck-1').is(":checked"))
                $("#registersubmit").prop('disabled', false);
       } else {
           $("#registersubmit").prop('disabled', true);
       }
   }

   function clearNakladnaya(){
       // alert(5);
        $("#countries").val("");
        $("#personalcode").val("");
        $("#promocode").val("");
        $("#description").val("");
        $("#tovarlink").val("");
        $("#size").val("");
        $("#color").val("");
        $("#count").val("");
        $("#price").val("");
        $("#lastprice").val("");
        $("#isexpress").prop("checked",false);
        
   }


   function addToBasket(){
        alert("Добавлено в корзину");    
   }

   function changeEndPrice(){
        var promocode = $('#promocode').val();
        var discountpercent = 0;
        var price = $('#price').val();
        var count = $('#count').val();
        var endprice = "";
        var countprice = 0;
        if (count.length!=0) {
           countprice = price*count;
        } else countprice = price*1;

        check = $('#isexpress').is(":checked");
        if (check == true)
        countprice = countprice+ (countprice*5.0/100.0);

        countprice = Math.round(countprice, 2);


        if (promocode.length>=4) {
            $.ajax({type:'POST',url:'/checkpromocode',data:{parameter:promocode},
            success:function(data){
                    
                    discountpercent = data;
                    $('#percent').val(window.discountpercent);
                    if (discountpercent>0) {
                        endprice = countprice - (countprice*discountpercent/100.0);
                    } else {
                        endprice = countprice;
                    }
                    $('#lastprice').val(endprice);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    $('#lastprice').val(countprice);
            }  });
        }
        else 
        $('#lastprice').val(countprice);
       

       
       
       
        
        
   }

   function isexpress(v){
    var endprice = parseFloat($('#lastprice').val());   
    console.log(endprice);

        if(v == 1)
        {
        // checked
        endprice = endprice + ((endprice*5)/100);
        
        }else if(v == 0)
        {
        // unchecked
        endprice = endprice - ((endprice*5)/100);
        
        }

        endprice = Math.round(endprice, 2);


       $('#lastprice').val(endprice);
   }


   function loadshoplist(countryid){
        if ( (countryid == 1) || (countryid == -1) )
        $("#shoplist").html(
            '<div class="col-md-3"><img src="/assets/img/shops/chin/1x.jpeg" class="shopimage"/></div>'+
            '<div class="col-md-3"><img src="/assets/img/shops/chin/2x.jpeg" class="shopimage"/></div>'+
            '<div class="col-md-3"><img src="/assets/img/shops/chin/3x.jpeg" class="shopimage"/></div>'+      
            '<div class="col-md-3"><img src="/assets/img/shops/chin/4x.jpeg" class="shopimage"/></div>'+        
            '<div class="col-md-3"><img src="/assets/img/shops/chin/5x.jpeg" class="shopimage"/></div>'+               
            '<div class="col-md-3"><img src="/assets/img/shops/chin/6x.jpeg" class="shopimage"/></div>'+        
            '<div class="col-md-3"><img src="/assets/img/shops/chin/7x.jpeg" class="shopimage"/></div>'+        
            '<div class="col-md-3"><img src="/assets/img/shops/chin/8x.jpeg" class="shopimage"/></div>'               
        );
        else if (countryid == 2)
        $("#shoplist").html(
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/1x.jpeg" class="shopimage"/></div>'+       
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/2x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/3x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/4x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/5x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/6x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/7x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/8x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/9x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/10x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/11x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/12x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/13x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/14x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/15x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/16x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/17x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/18x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/19x.jpeg" class="shopimage"/></div>'+              
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/20x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/21x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/22x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/23x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/24x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/25x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/26x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/27x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/28x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/29x.jpeg" class="shopimage"/></div>'+             
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/30x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/31x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/32x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/33x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/34x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/35x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/36x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/37x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/38x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/39x.jpeg" class="shopimage"/></div>'+             
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/40x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/41x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/42x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/43x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/44x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/45x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/46x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/47x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/48x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/49x.jpeg" class="shopimage"/></div>'+             
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/50x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/51x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/52x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/53x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/54x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/55x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/56x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/57x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/58x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/59x.jpeg" class="shopimage"/></div>'+              
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/60x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/61x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/62x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/63x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/64x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/65x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/66x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/67x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/68x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/69x.jpeg" class="shopimage"/></div>'+             
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/70x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/71x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/72x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/73x.jpeg" class="shopimage"/></div>'+               
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/74x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/75x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/76x.jpeg" class="shopimage"/></div>'+
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/77x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/78x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/79x.jpeg" class="shopimage"/></div>'+             
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/80x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/81x.jpeg" class="shopimage"/></div>'+        
                    '<div class="col-md-3"><img src="/assets/img/shops/turk/82x.jpeg" class="shopimage"/></div>'       
                 
        );
   }

</script>
