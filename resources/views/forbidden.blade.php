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
                    <h2 class="text-center" style="font-size: 16px;margin: 0px 8px 0px;"><strong>ЗАПРЕЩЕННЫЕ ТОВАРЫ</strong></h2>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 0px;"><img src="assets/img/underline.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-container">
        <form method="post" style="width: 600px;padding: 10px 20px;">
            <p>
            <p> <strong>Авиа:</strong>
            <ul>

                <li>Аккумуляторы, батареи</li>
                <li>Взрывоопасные вещества</li>
                <li>Продукты питания</li>
                <li>Любые виды оружия</li>
                <li>Наркотические вещества</li>
                <li>Горючие материалы</li>
                <li>Лекарства</li>
            </ul>
            </p>
            <p> <strong>Авто:</strong>
            <ul>
                <li>Продукты питания</li>
                <li>Наркотические вещества</li>
                <li>Лекарства</li>

            </p>

        </form>
    </div>
</div>
@endsection
