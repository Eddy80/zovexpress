
@extends('cabhome')

@section('cabcontent')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
<div>
            <div class="col-sm-6 col-md-9 item" style="margin-left:10px;width: 750px;padding: 10px 20px;
            border-radius: 5px;background-color:#fff;">
            <a href="#"></a>
  
                <form action="/cabedit" method="post">
                    {{csrf_field()}}
                <h3 class="text-left name cabFormLabel" >Имя: <input class="cabFormEdit"  name="firstname" id="firstname" type="text" value="{{ $user[0]->firstname }}" placeholder="Имя"/></h3>
                <h3 class="text-left name cabFormLabel" >Фамилия: <input class="cabFormEdit" name="lastname" id="lastname"  type="text" value="{{ $user[0]->lastname }}" placeholder="Фамилия"/></span></h3>
                <h3 class="text-left name cabFormLabel" >Email:   <input class="cabFormEdit" name="email" id="email"   type="text" value="{{ $user[0]->email }}" placeholder="Email"/></span></h3>
                <h3 class="text-left name cabFormLabel" >Телефон: <input class="cabFormEdit" name="phone" id="phone"   type="text" value="{{ $user[0]->phone }}" placeholder="Телефон"/></span></h3>
                <h3 class="text-left name cabFormLabel" >Паспорт: <input class="cabFormEdit" name="passport" id="passport"   type="text" value="{{ $user[0]->passport }}" placeholder="Паспорт"/></span></h3>
                <h3 class="text-left name cabFormLabel" >Дата регистрации: <span class="cabFormEdit">{{date('d.m.Y', strtotime($user[0]->created_at))}}</span></h3>
                <p class="description" style="text-align: justify; width: 96%;"><textarea name="description" id="description" cols="60" rows="8" style="border: 1; border-radius: 5px; border-color: #C4C4C4; padding-left: 5px; padding-bottom: 3px; background-color:#ffffff;" >{{$user[0]->description}}</textarea></p>
                <p class="description" style="text-align: left; width: 96%;">
                <input class="cabFormSubmit" style="background-color:#DF0707;" 
                type="submit" value="Сохранить"/></p>
                </form>
            </div>
            
</div>
        
@endsection
