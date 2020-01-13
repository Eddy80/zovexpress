
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
<!--                <h3 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabtracking')}}">Отследить посылку</a></h3>-->
<!--                <h3 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabhistory')}}">История отправок</a></h3>-->
            </div>
            <?php $user = UsersController::getUserFLNames(Auth::user()->id);  ?>
            <div class="col-sm-6 col-md-3 item" style="width: 350px;padding: 0px 20px;"><a href="#"></a>

                @if (count($user) > 0)
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Имя: <span style="font-weight: normal;">{{$user[0]->firstname}}</span></h3>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Фамилия: <span style="font-weight: normal;">{{$user[0]->lastname}}</span></h3>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Email: <span style="font-weight: normal;">{{$user[0]->email}}</span></h3>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Телефон: <span style="font-weight: normal;">{{$user[0]->phone}}</span></h3>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Паспорт: <span style="font-weight: normal;">{{$user[0]->passport}}</span></h3>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Дата регистрации: <span style="font-weight: normal;">{{date('d.m.Y', strtotime($user[0]->created_at))}}</span></h3>
                @endif



            </div>
            <div class="col-sm-6 col-md-6 item" style="padding: 0px;"><a href="#"></a>

                <p class="description" style="text-align: justify;">{{$user[0]->description}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
