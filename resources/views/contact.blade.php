@extends('layout')

@section('content')
<div class="register-photo" style="background-color: rgb(255,255,255);padding: 20px 0px;">
    <div class="table-responsive table-borderless">
        <table class="table table-bordered">
            <thead>
            <tr></tr>
            </thead>
            <tbody>
            <tr>
                <td style="padding: 0px;">
                    <h2 class="text-center" style="font-size: 16px;margin: 0px 8px 0px;"><strong>ОБРАТНАЯ СВЯЗЬ</strong></h2>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 0px;"><img src="assets/img/underline.png"></td>
            </tr>
            </tbody>
        </table>

    </div>

    <div class="form-container">

        <div class="image-holder" style="background-image: url('assets/img/contact.jpg');"></div>
        <form name="contactform" method="post" action="contactform">

            {{ csrf_field() }}
            <h2 class="text-center" style="margin: 0px 0px 10px;height: 20px;font-size: 18px;"><strong>Возникли вопросы?</strong></h2>
            <h2 class="text-center" style="font-size: 14px;">Напишите нам</h2>
            <input class="form-control" type="text" name="name" placeholder="Имя" >
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" style="margin: 15px 0px;"></div>
            <div class="form-group"><input class="form-control" type="phone" name="phone" placeholder="Телефон"></div>
            <div class="form-group"><textarea class="form-control" rows="20" cols="1" name="text" placeholder="Текст"></textarea></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #da9904;">Отправить</button></div>



                @if(session('status'))
                 <div class="alert alert-success">
                {{session('status')}}
                 </div>
                @endif

        </form>



    </div>


</div>

@endsection
