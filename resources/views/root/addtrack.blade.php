@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\CodesController;
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
                                    <label for="usercode">Выберите код пользователя</label>
                                    <select required id="usercode" name="usercode" class="form-control select2" style="width: 100%;" onchange="javascript:getUserIdByCodeId();">
                                        <option selected="selected"></option>
                                        <?php   $codes = CodesController::getList(); ?> <!-- getCodeList -->
                                            @foreach($codes as $code)
                                            <OPTION  value="{{$code->id}}">{{$code->code}}</OPTION>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="userid">Пользователь</label>
                                    <select required id="userid" name="userid" class="form-control select2" style="width: 100%;" >
                                        <option selected="selected"></option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="tracknumber"> Введите трек номер посылки </label>
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
                                <div class="form-group">
                                    <label class="col-form-label" for="kq"> Введите вес посылки (кг.) </label>
                                    <input required type="text" class="form-control" id="kq" name="kq" placeholder="вес посылки" onkeyup="calcsum();" />
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="naimenovanie"> Наименование </label>
                                    <input required type="text" class="form-control" id="naimenovanie" name="naimenovanie" placeholder="наименование">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="zakq"> За кг </label>
                                    <input required type="text" class="form-control" id="zakq" name="zakq" placeholder="за кг" onkeyup="calcsum();"/>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="summa"> Сумма </label>
                                    <input required type="text" class="form-control" id="summa" name="summa" placeholder="сумма" readonly onchange="calcitogo();" />
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="sf"> СФ </label>
                                    <input required type="text" class="form-control" id="sf" name="sf" placeholder="сф" onkeyup="calcitogo();" />
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="straxovka"> Страховка </label>
                                    <input required type="text" class="form-control" id="straxovka" name="straxovka" placeholder="страховка" onkeyup="calcitogo();" />
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="itoqodollar"> Итого ($) </label>
                                    <input required type="text" class="form-control" id="itoqodollar" name="itoqodollar"  readonly placeholder="Итого ($)">
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-form-label" for="som"> Сумма (локал.) </label>
                                    <input required type="text" class="form-control" id="som" name="som" placeholder="сумма (локал.)">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="dostavka"> Доставка </label>
                                    <input required type="text" class="form-control" id="dostavka" name="dostavka" placeholder="доставка">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="itoqo"> Итого </label>
                                    <input required type="text" class="form-control" id="itoqo" name="itoqo" placeholder="Итого">
                                </div> -->

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
