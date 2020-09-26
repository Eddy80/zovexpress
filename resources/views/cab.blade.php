
@extends('layout')

@section('content')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
<div class="team-grid cabinet">
     

    <div class="container">
    <div class="article-list" >
        
        <div class="row articles">
        <div class="col-md-12" style="margin-top:20px;margin-bottom:10px">
                    <p><a href="/">Главная</a> > Кабинет пользователя </p>
                    </div>
            <div class="col-sm-6 col-md-3 item" style="text-align:left;font-name:Roboto;box-shadow: 2px 2px #888888;border-radius:4%;background-color: #F7F7F7;padding: 20px 0px 20px 45px;">
                <img " src="assets/img/profile.png" style="margin-left:17px;width: 150px;height: 150px;border-radius:50%;">
                <h3 class="name">&nbsp;</h3>
                @if (count($user) > 0)
                <h6 class="name"><a style="color: black;" href="{{url('cab')}}">{{$user[0]->firstname}} {{$user[0]->lastname}}</a></h6>
                @endif
                <h6><a style="color: blue;" href="{{url('cabedit')}}"><u>Редактировать профиль</u></a></h6>
                <h6><a style="color: blue;" href="{{url('cabpassword')}}"><u>Сменить пароль</u></a></h6>
                <h3 class="name">&nbsp;</h3>

                <h6><a style="text-decoration: none;color: #000000;" href="javascript:codeform();">Получить КОД</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('cabcodelist')}}">Полученные коды</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('tracking')}}">Отследить посылку</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('invoicelist')}}">Мои заказы</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('cabcodelist')}}">Мои бонусы</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('tracking')}}">Сообщения</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="javascript:codeform();">Мой баланс</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('cabcodelist')}}">Пополнить баланс</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('tracking')}}">Открыть магазин</a></h6>
           <!-- <h4 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabhistory')}}">История отправок</a></h3>-->
            </div>
            <div class="col-sm-6 col-md-3 item" style="width: 350px;padding: 0px 20px;"><a href="#"></a>

                @if (count($user) > 0)
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Имя: <span style="font-weight: normal;">{{$user[0]->firstname}}</span></h4>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Фамилия: <span style="font-weight: normal;">{{$user[0]->lastname}}</span></h4>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Email: <span style="font-weight: normal;">{{$user[0]->email}}</span></h4>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Телефон: <span style="font-weight: normal;">{{$user[0]->phone}}</span></h4>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Паспорт: <span style="font-weight: normal;">{{$user[0]->passport}}</span></h4>
                <h3 class="text-left name" style="font-size: 14px;width: 300px;">Дата регистрации: <span style="font-weight: normal;">{{date('d.m.Y', strtotime($user[0]->created_at))}}</span></h4>
                @endif



            </div>
            <div class="col-sm-6 col-md-6 item" style="padding: 0px;"><a href="#"></a>

                <p class="description" style="text-align: justify;">{{$user[0]->description}}</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
