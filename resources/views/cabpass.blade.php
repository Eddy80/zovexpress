
@extends('layout')

@section('content')
<?php
use App\Http\Controllers\UsersController;
?>
<div class="article-list">
    <div class="container">
        <div class="intro"></div>
        <div class="row articles" style="margin-top: 20px;">
            <div class="col-sm-6 col-md-3 item" style="background-color: #da9904;padding: 20px 15px 20px;"><img class="border rounded border-warning shadow-lg" src="assets/img/profile.png" style="width: 160px;height: 150px;background-color: #787373;">
               <!-- <h3 class="name">Изменить изображение</h3> -->
                <h3 class="name"><a style="text-decoration: none;color: #000000;" href="{{url('cab')}}">Информация</a></h3>
                <h3 class="name"><a style="text-decoration: none;color: #000000;" href="{{url('cabedit')}}">Редактировать профиль</a></h3>
                <h3 class="name"><a style="text-decoration: none;color: #000000;" href="{{url('cabpassword')}}">Поменять пароль</a></h3>
                <h3 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="javascript:codeform();">Получить КОД</a></h3>
                <h3 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabcodelist')}}">Полученные коды</a></h3>
                <h3 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabtracking')}}">Отследить посылку</a></h3>
                <h3 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabhistory')}}">История отправок</a></h3>
            </div>
            <div class="col-sm-6 col-md-6 item" style="width: 100%;padding: 0px 20px;"><a href="#"></a>
                <?php $user = UsersController::getUserFLNames(Auth::user()->id);  ?>
                <form action="/cabpassword" method="post">
                    {{csrf_field()}}
                    <h3 class="text-left name" style="font-size: 14px;width: 66%;">Старый Пароль: <span style="font-weight: normal;"><input required minlength="6" name="oldpassword" id="oldpassword"  style="border: 1; border-radius: 5px; border-color: #da9904; padding-left: 5px; padding-bottom: 3px; background-color:#ffffff;width:150px;float: right;"  type="password" value="" placeholder="Старый Пароль"/></span></h3>
                    <h3 class="text-left name" style="font-size: 14px;width: 66%;">Новый Пароль: <span style="font-weight: normal;"><input required minlength="6" name="password" id="password"  style="border: 1; border-radius: 5px; border-color: #da9904; padding-left: 5px; padding-bottom: 3px; background-color:#ffffff;width:150px;float: right;"  type="password" value="" placeholder="Новый Пароль"/></span></h3>
                    <h3 class="text-left name" style="font-size: 14px;width: 66%;">Подтверждение Пароля: <span style="font-weight: normal;"><input required minlength="6" name="password2" id="password2"  style="border: 1; border-radius: 5px; border-color: #da9904; padding-left: 5px; padding-bottom: 3px; background-color:#ffffff;width:150px;float: right;"  type="password" value="" placeholder="Подтверждение"/></span></h3>
                    <p class="description" style="text-align: right; width: 66%;"><input style="background-color:#da9904;border: 1; border-radius: 5; border-color: #1b1e21; " type="submit" value="Изменить"/></p>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
