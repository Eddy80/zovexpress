@extends('cabhome')

@section('cabcontent')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
        
        <div>
       
            <div class="col-sm-6 col-md-3 item" style="width: 350px;padding: 0px 20px;"
            ><a href="#"></a>

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

@endsection
