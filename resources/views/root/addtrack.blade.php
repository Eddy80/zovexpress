@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OtpravkaController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Добавление посылки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Добавление посылки</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Посылка</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form  action="/addtrack" method="post" >
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Выберите пользователя</label>
                                    <select required id="userid" name="userid" class="form-control select2" style="width: 100%;" onchange="javascript:getCodeList();">
                                        <option selected="selected"></option>
                                        <?php   $users = UsersController::getList(); ?>
                                        @foreach($users as $user)
                                        <OPTION  value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}} {{$user->surname}} [{{$user->email}}, {{$user->phone}}]</OPTION>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Выберите код пользователя</label>
                                    <select required id="usercode" name="usercode" class="form-control select2" style="width: 100%;">
                                        <option selected="selected"></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"> Введите трек номер посылки </label>
                                    <input required type="text" class="form-control" id="tracknumber" name="tracknumber" placeholder="номер посылки">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Выберите отправку</label>
                                    <select required id="otpravkaid" name="otpravkaid" class="form-control select2" style="width: 100%;" onchange="">
                                        <option selected="selected"></option>
                                        <?php   $otpravkas = OtpravkaController::getList(); ?>
                                        @foreach($otpravkas as $otpravka)
                                        <OPTION  value="{{$otpravka->id}}">{{$otpravka->name}} - {{$otpravka->kod}}</OPTION>
                                        @endforeach
                                    </select>
                                </div>
<!--                                <div class="form-group">-->
<!--                                    <label class="col-form-label" for="inputSuccess"> Введите город отправки </label>-->
<!--                                    <input type="text" class="form-control" id="receiveto" name="receiveto" placeholder="город отправки">-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-group">-->
<!--                                    <label for="exampleInputEmail1">Выберите вид отправки</label>-->
<!--                                    <select id="tracktype" name="tracktype" class="select2"   style="width: 100%;">-->
<!---->
<!--                                        <option value="0">Самолетом</option>-->
<!--                                        <option value="1">Автомобилем</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label>Выберите дату отправки</label>-->
<!--                                    <div class="input-group">-->
<!--                                        <div class="input-group-prepend">-->
<!--                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>-->
<!--                                        </div>-->
<!--                                        <input type="text" id="sentdate" name="sentdate" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>-->
<!--                                    </div>-->

<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label>Ожидаемая дата прибытия</label>-->
<!---->
<!--                                    <div class="input-group">-->
<!--                                        <div class="input-group-prepend">-->
<!--                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>-->
<!--                                        </div>-->
<!--                                        <input type="text" id="expectedreceivedate" name="expectedreceivedate"  class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>-->
<!--                                    </div>-->

<!--                                </div>-->

<!--                                <div class="form-check">-->
<!--                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                                    <label class="form-check-label" for="exampleCheck1">Уведомить пользователя</label>-->
<!--                                </div>-->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
