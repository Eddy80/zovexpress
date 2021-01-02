
@extends('cabhome')

@section('cabcontent')
<?php
use App\Http\Controllers\UsersController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
<div>
            <div class="col-sm-6 col-md-9 item" style="margin-left:10px; width: 750px;padding: 10px 20px;"><a href="#"></a>
              
                <form action="/cabpassword" method="post">
                    {{csrf_field()}}
                    <section>
                        <div class="alert alert-danger" @if (session('status')) style="display:block;" @else style="display:none;" @endif >
                            @if(session('status'))
                            {{session('status')}}
                            @endif

                        </div>
                    </section>
                    <h3 class="text-left name cabFormLabel">Старый Пароль: 
                    <input required minlength="6" name="oldpassword" id="oldpassword" 
                    class="cabFormEdit"  type="password" value="" placeholder="Старый Пароль"/>
                    </h3>
                    <h3 class="text-left name cabFormLabel">Новый Пароль: 
                    <input required minlength="6" name="password" id="password" 
                    class="cabFormEdit"  type="password" value="" placeholder="Новый Пароль"/>
                    </h3>
                    <h3 class="text-left name cabFormLabel">Подтвердите Пароль: 
                    <input required minlength="6" name="password2" id="password2" 
                    class="cabFormEdit" type="password" value="" placeholder="Подтверждение"/></h3>
                    <p class="description" style="text-align: left; width: 66%;">
                    <input class="cabFormSubmit" style="background-color:#DF0707;" type="submit" value="Изменить"/>
                    </p>
                </form>
            </div>


</div>
@endsection
