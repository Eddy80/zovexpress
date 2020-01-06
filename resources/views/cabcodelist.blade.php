
@extends('layout')

@section('content')
<?php
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CountryController;
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
            <div class="col-sm-6 col-md-6 item" style="width: 100%;padding: 0px 20px;"><a href="#"></a>
                <ul class="list-group">
                    <?php   $codes = CodesController::getListByUserId(); ?>

                    @foreach($codes as $code)

                    <li class="list-group-item" style="height: 58px;">
                        <div class="table-responsive" style="height: 75px;">
                            <table class="table">
                                <thead>
                                <tr></tr>
                                </thead>
                                <tbody>
                                <tr></tr>
                                <tr >
                                    <td class="border-white" style="padding: 0px;">
                                        <button class="btn btn-primary border rounded border-warning" type="button" style="background-color: #ffffff;margin: 0px 5px 0px;padding: 0px 10px;width: 200px;color: #000000;">
                                            {{$code->code}}
                                        </button>
                                    </td>
                                    <td style="padding: 2px 0px;">
                                        <div class="table-responsive table-borderless border-white">
                                            <table class="table">
                                                <?php   $countryname = CountryController::getNameById($code->countryid); ?>

                                                <tr>
                                                    <td style="height: 25px; padding: 3px 5px;font-size: 10px;background-color: #d79827;color: #ffffff;width: 200px;">
                                                        {{$countryname->nameru}}
                                                    </td>
                                                </tr>


                                            </table>
                                        </div>
                                    </td>
                                    <td class="border-white" style="padding: 0px;height: 48px;"><label style="font-size: 12px;"><strong><em>&nbsp;</em></strong></label></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
