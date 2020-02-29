@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\OtpravkaController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование отправки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/otpravkalist">Отправки</a></li>
                        <li class="breadcrumb-item active">{{ $otpravka->name }} -  {{ $otpravka->kod }} </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <form  name="otpravkaform" action="/updateotpravka" method="post" >
                    {{csrf_field()}}
                <h3 class="card-title" style="font-weight: bold">
                    <i class="fas fa-shipping-fast"></i>
                    &nbsp;
                    Введите данные

                    <input type="hidden" id="id" name="id" value="{{$otpravka->id}}" />
                </h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>Название:</dt>
                    <dd>{{ $otpravka->name }}</dd>
                    <dt>Код:</dt>
                    <dd>{{ $otpravka->kod }}</dd>
                    <dt>Укажите в процентах пройденный путь (%):</dt>
                    <dd><input type="text" value="{{ $otpravka->nowpercent }}" name="nowpercent" /></dd>
                    <dt>Укажите где находится отправка:</dt>
                    <dd><input type="text" value="{{ $otpravka->nowplace }}" name="nowplace" /></dd>
                    <dt>Укажите дату прибытия если уже доставлено:</dt>
                    <dd><input type="text" value="{{ $otpravka->receivedate }}" name="receivedate" /></dd>
                    <dt></dt>
                    <dd><input class="btn btn-success" type="submit" value="Сохранить" /></dd>

                    </form>

                </dl>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
