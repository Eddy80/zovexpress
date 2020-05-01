@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CountryController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Добавление отправки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Добавление отправки</li>
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
                            <h3 class="card-title">Отправка</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form  action="/addotpravka" method="post" >
                            {{csrf_field()}}
                            <div class="card-body">

                                <input type="hidden"   id="nowplace"  name="nowplace" value="" />
                                <input type="hidden"   id="nowpercent"  name="nowpercent" value="0" />
                                <input type="hidden"   id="receivedate"  name="receivedate" />

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"> Введите название отправки </label>
                                    <input type="text" required class="form-control"   id="name"  name="name" placeholder="название отправки">
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"> Введите Код отправки </label>
                                    <input type="text" required class="form-control"  id="kod" name="kod" placeholder="код отправки">
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"> Введите откуда отправка </label>
                                    <input type="text" required class="form-control" id="sentfrom" name="sentfrom" placeholder="откуда отправка">
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"> Введите город отправки </label>
                                    <input type="text" required class="form-control" id="receiveto" name="receiveto" placeholder="город отправки">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Выберите вид отправки</label>
                                    <select id="type" required name="type" class="select2"   style="width: 100%;">

                                        <option value="0">Самолетом</option>
                                        <option value="1">Автомобилем</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Выберите дату отправки</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" required id="sentdate" name="sentdate" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>Ожидаемая дата прибытия</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" required id="expectedreceivedate" name="expectedreceivedate"  class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Создать Отправку</button>
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
