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
                    <dd>
                        <!-- <input type="text" value="{{ $otpravka->nowpercent }}" name="nowpercent" /> -->
                        <select name="nowpercent" onchange="setreceivedate(this.value)">
                            <option value="{{ $otpravka->nowpercent }}">{{ $otpravka->nowpercent }}%</option>
                            <option value="0">0%</option>
                            <option value="25">25%</option>
                            <option value="50">50%</option>
                            <option value="75">75%</option>
                            <option value="100">100%</option>
                        </select>
                    </dd>
                    <dt>Укажите где находится отправка:</dt>
                    <dd><input type="text" value="{{ $otpravka->nowplace }}" name="nowplace" /></dd>
                    <dt>Укажите дату прибытия если уже доставлено:</dt>
                    <dd>
                    <?php
                    if (strpos($otpravka->receivedate, '-') !== false) {
                        $date = explode('-', $otpravka->receivedate);
                        $new_receivedate = $date[2] . '/' . $date[1] . '/' . $date[0];
                        $otpravka->receivedate = $new_receivedate;
                    }
                    
                    if (strpos($otpravka->sentdate, '-') !== false) {
                        $date = explode('-', $otpravka->sentdate);
                        $new_sentdate = $date[2] . '/' . $date[1] . '/' . $date[0];
                        $otpravka->sentdate = $new_sentdate;
                    }

                    $sentdate = (string)$otpravka->sentdate;
                    ?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" onkeyup="comparewithsentdate({{$sentdate}}, this.value);" readonly value="{{ $otpravka->receivedate }}" name="receivedate" id="receivedate" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                    <!-- <input type="text" value="{{ $otpravka->receivedate }}" name="receivedate" /> -->
                    </dd>
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
