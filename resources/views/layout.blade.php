<!DOCTYPE html>
<html style="filter: brightness(100%);">

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
</head>

<body>
<div>
    <div class="header-dark" style="margin: 0px;background-image: url(&quot;transparent&quot;);background-color: rgb(68,66,66);padding: 0px;">
        <div></div>
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color: #212a39;padding: 10px 0px 10px 0px;margin: 0 auto;">
            <div class="container"><a class="navbar-brand" href="#"><img style="width: 73px;height: 52px;background-image: url(&quot;assets/img/logo.png&quot;);color: rgb(255,255,255);"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1" style="padding: 0px 5px 0px 0px;">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="/" data-bs-hover-animate="rubberBand" style="font-size: 14px;">О нас</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="rubberBand" style="font-size: 14px;width: 55;">Информация</a>
                            <div class="dropdown-menu" role="menu" style="background-color: #1f2938;height: 95px;padding: 10px;">
                                <a class="dropdown-item" role="presentation" href="{{url('infosending')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">Виды отправок и сроки</a>
                                <a class="dropdown-item" role="presentation" href="{{url('forbidden')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">Запрещенные товары</a>
                                <a class="dropdown-item" role="presentation" href="{{url('infotracking')}}" data-bs-hover-animate="pulse" style="background-color: #da9904;color: rgb(255,255,255);">Отслеживание товаров</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">Калькулятор</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tracking')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">Отслеживание</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('reviews')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">Отзывы</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('contact')}}" data-bs-hover-animate="rubberBand" style="font-size: 14px;">Обратная связь</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-left" href="{{url('tasco')}}" data-bs-hover-animate="tada" style="color: #da9904;font-size: 14px;"><strong>TASCO</strong></a></li>
                    </ul><span class="navbar-text" style="margin: 0px 10px 0px 50px;"><a class="text-right text-primary login" href="javascript:loginform();" data-aos="fade-up" data-aos-duration="100" data-aos-once="true" style="color: #1e5383;margin: -22px 5px 0px 38 px;font-size: 14px;width: 14px;"><strong>Вход</strong></a></span>
                    <a
                        class="btn btn-light border rounded ml-auto action-button" role="button" href="javascript:regform();" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 140px;height: 31px;padding: 3px 3px 3px 3px;font-size: 14px;"><strong>Регистрация</strong></a>
                </div>
            </div>
        </nav>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

@yield('content')


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
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Регистрация</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Email адрес :</label>
                        <input type="email" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>

                    <div class="col"><label style="font-size: 14px; width: 200px;">Пароль :</label><input class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Подтверждение пароля :</label><input class="border-warning border rounded" type="password" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Имя :</label><input class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                    <div class="col"><label style="font-size: 14px; width: 200px;">Фамилия :</label><input class="border-warning border rounded" type="text" style="font-size: 14px;padding-left:5px; width: 200px;"/></div>
                </div>

                <div class="form-check" style="margin: 10px 0px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label style="font-size: 14px;" class="form-check-label" for="formCheck-1">Я принимаю <span style="text-decoration: underline;">пользовательское соглашение</span></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label style="font-size: 14px;" class="form-check-label" for="formCheck-2">Я согласен(-на) на обработку персональных данных и получения информации о товарах и акциях</label></div>
            </div>
            <div class="modal-footer">
                <button onclick="loginform()" class="btn btn-light border rounded border-warning" type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">Зарегистрирован?</button>
                <button class="btn btn-white" type="button" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Продолжить</button></div>
        </div>
    </div>
</div>


<div class="modal fade" id="loginform" role="dialog" tabindex="-1" style="margin: 0 auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px;font-weight: bold;">Вход</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Email адрес :</label>
                        <input type="email" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>

                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Пароль :</label>
                        <input type="password" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>
                </div>

                <div class="form-check" style="margin: 10px 0px;">
                    <input class="form-check-input" type="checkbox" id="formCheck-1"><label style="font-size: 14px;" class="form-check-label" for="formCheck-1">Запомнить</label>
                <label style="font-size: 14px;float: right;" class="form-check-label">Забыли пароль?</label>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="regform()" class="btn btn-light border rounded border-warning" type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">Регистрация</button>
                <button class="btn btn-white" type="button" style="font-size: 14px; color:#ffffff; background-color: #da9904;">Продолжить</button></div>
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
                    <div class="col">
                        <label style="font-size: 14px; width: 400px;">Выберите страну отправки :</label>
                        <input type="email" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
                    </div>

                    <div class="col">
                        <label style="font-size: 14px;font-weight: bold; width: 400px;">Ваш код отправки :</label>
                        <input type="password" class="border-warning border rounded" style="font-size: 14px; padding-left:5px; width: 200px;"/>
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
<script>
   function regform()
    {
        $("#registrationform").modal('show');
    }

   function loginform()
   {
       $("#loginform").modal('show');
   }
</script>


