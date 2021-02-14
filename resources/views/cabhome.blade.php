
@extends('layout')

@section('content')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
<div class="team-grid cabinet">
     

    <div class="container">
    <div class="article-list" style="padding-top:0px;">
        
        <div class="row articles" style="padding-top:0px;" >
            <div class="col-md-12" style="margin-top:20px;margin-bottom:10px">
                <p><a href="/">Главная</a> > Кабинет пользователя </p>
            </div>
            <div class="col-md-3 item" 
            style="text-align:left;font-name:Roboto;box-shadow: 2px 2px #888888;
            border-radius:4%;background-color: #DFF0FD;padding: 20px 0px 20px 45px;">
                <img src="assets/img/profile.png" style="margin-left:17px;width: 150px;height: 150px;border-radius:50%;">
                <img src="assets/img/editpencil.png" style="margin-top:-100px;" >
                <h3 class="name">&nbsp;</h3>
                @if (count($user) > 0)
                <h6 class="name"><a style="color: black; text-align:center;float:center;" href="{{url('cab')}}">{{$user[0]->firstname}} {{$user[0]->lastname}}</a></h6>
                @endif
                <h6><a style="color: blue;" href="{{url('cabedit')}}"><u>Редактировать профиль</u></a></h6>
                <h6><a style="color: blue;" href="{{url('cabpassword')}}"><u>Сменить пароль</u></a></h6>
                <h3 class="name">&nbsp;</h3>

                <h6><a style="text-decoration: none;color: #000000;font-weight:bold;" href="javascript:codeform();">Получить КОД</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('cabcodelist')}}">Полученные коды</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('tracking')}}">Отследить посылку</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('invoicelist')}}">Мои заказы</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('invoicenew')}}">Заказать</a></h6>
                <h6><a style="text-decoration: none;color: #000000;">Накладная</a></h6>

                <h6><a style="text-decoration: none;color: #000000;" href="{{url('mybonuses')}}">Мои бонусы</a></h6>
                <hr style="margin-right:25px;">
                <h6><a style="text-decoration: none;color: #000000;font-weight:bold;" href="{{url('mymessages')}}">Сообщения</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('mybalans')}}">Мой баланс</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('topupbalans')}}">Пополнить баланс</a></h6>              
            
                <hr style="margin-right:25px;">

                <h6><a style="text-decoration: none;color: #000000; font-weight:bold;" href="{{url('cabaddshop')}}">Открыть магазин</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('upmarket')}}">Поднять магазин</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('mysells')}}">Мои продажи</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('mygoods')}}">Мои товары</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('cabaddgoods')}}">Добавить товар</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('enhancegoodscount')}}">Увеличить кол-во товаров</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('premiumpaket')}}">Премиум пакет</a></h6>
                <h6><a style="text-decoration: none;color: #000000;" href="{{url('goldpaket')}}">GOLD пакет</a></h6>
            
            </div>
           <!-- <h4 class="name" style="background-color: #ffffff;"><a style="text-decoration: none;color: #000000;" href="{{url('cabhistory')}}">История отправок</a></h3>-->

           
        <div>
         
         
         @yield('cabcontent')
           
        </div>
    </div>
</div>
</div>
@endsection
