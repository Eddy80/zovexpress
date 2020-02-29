@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\TrackingsController;
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
                    <h1>Все посылки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Посылки</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Посылки</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php   $trackings = TrackingsController::getList(); $i=0; ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="font-size: 12px">
                            <thead>
                            <tr>
                                <th>№</th>
<!--                                <th>Отправка</th>-->
                                <th>Имя и фамилия</th>
                                <th>Код пользователя</th>
                                <th>Трек номер посылки</th>
<!--                                <th>КГ</th>-->
<!--                                <th>Наим.</th>-->
<!--                                <th>Гор. отп.</th>-->
<!--                                <th>Дата отп.</th>-->
<!--                                <th>Гор. пр.</th>-->
<!--                                <th>Дата пр.</th>-->
<!--                                <th>Ож. дата</th>-->
<!--                                <th></th> status -->
<!---->
<!--                                <th>За кг.</th>-->
<!--                                <th>Сумма</th>-->
<!--                                <th>СФ</th>-->
<!--                                <th>Стр.</th>-->
<!--                                <th>СОМ</th>-->
<!--                                <th>Дост.</th>-->
<!--                                <th>Ит.</th>-->

<!--                                <th>Вид отп.</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $otpravkanamehistory = -1;
                            ?>

                            @foreach($trackings as $tracking)
                            <?php
                            $i++;
                            $user2 = UsersController::getUserFLNames($tracking->userid);
                            $otpravkaname = OtpravkaController::getNameById($tracking->otpravkaid);
                            ?>

                            @if (count($otpravkaname) > 0)
                                @if ($tracking->otpravkaid != $otpravkanamehistory)
                                    <tr style="background: #ffff11;">
                                        <td colspan="5">
                                            <table style="border: 1px; border-width: 1px; border-color:#ffff11;  color: #111111; padding: 0; margin: 0;">
                                                <tr>
                                                    <td>
                                                        <b> Отправка: </b>
                                                        {{$otpravkaname[0]->name}}
                                                    </td>
                                                    <td>
                                                        <b> Код отправки: </b>
                                                        {{$otpravkaname[0]->kod}}
                                                    </td>
                                                    <td>
                                                        @if ($otpravkaname[0]->status==0)
                                                        <span style="color: blue">в пути</span>
                                                        @else
                                                        <span style="color: green">доставлено</span>
                                                        @endif
                                                        &nbsp;
                                                        ({{$otpravkaname[0]->nowpercent}}
                                                        <b>%</b>)
                                                    </td>

                                                    <td>

                                                        @if ($otpravkaname[0]->tracktype==0)
                                                        <img  src="../assets/img/black-plane.png">
                                                        @else
                                                        <img style="width: 25px; height:25px;" src="../assets/img/fast-delivery.png">
                                                        @endif
                                                    </td>

                                                </tr>
                                            </table>
                                        </td> <!-- otpravka -->
                                    </tr>

                                <?php $otpravkanamehistory = $tracking->otpravkaid;?>
                                @endif

                            @endif


                            <tr>
                                <td>{{$i}}</td>


                                @if (count($user2) > 0)
                                <td>{{ $user2[0]->firstname }} {{ $user2[0]->lastname }}</td>
                                @else
                                <td></td>
                                @endif
                                <td>{{$tracking->usercode}}</td>

                                <td><a href="#">{{$tracking->tracknumber}}</td></a>
                             <!--   <td></td>  KG -->
                             <!--   <td></td>  Naimenovaniye -->
<!--                                <td>{{$tracking->sentfrom}}</td>-->
<!--                                <td>{{$tracking->sentdate}}</td>-->
<!--                                <td>{{$tracking->receiveto}}</td>-->
<!--                                <td>{{$tracking->receivedate}}</td>-->
<!--                                <td>{{$tracking->expectedreceivedate}}</td>-->
<!--                                @if ($tracking->status==0)-->
<!--                                <td>в пути</td>-->
<!--                                @else-->
<!--                                <td>доставлено</td>-->
<!--                                @endif-->

<!--                                <th></th> За кг. -->
<!--                                <th></th> Сумма -->
<!--                                <th></th> СФ -->
<!--                                <th></th> Страховка -->
<!--                                <th></th> Сумма СОМ -->
<!--                                <th></th> Доставка -->
<!--                                <th></th> Итого -->

<!--                                @if ($tracking->tracktype==0)-->
<!--                                <td> <img  src="../assets/img/black-plane.png"></td>-->
<!--                                @else-->
<!--                                <td> <img style="width: 25px; height:25px;" src="../assets/img/fast-delivery.png"></td>-->
<!--                                @endif-->

                            </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>
<!--                                <th>Отправка</th>-->
                                <th>Имя и фамилия</th>
                                <th>Код пользователя</th>
                                <th>Трек номер посылки</th>
<!--                                <th>КГ</th>-->
<!--                                <th>Наим.</th>-->
<!--                                <th>Гор. отп.</th>-->
<!--                                <th>Дата отп.</th>-->
<!--                                <th>Гор. пр.</th>-->
<!--                                <th>Дата пр.</th>-->
<!--                                <th>Ож. дата</th>-->
<!--                                <th></th> status -->
<!---->
<!--                                <th>За кг.</th>-->
<!--                                <th>Сумма</th>-->
<!--                                <th>СФ</th>-->
<!--                                <th>Стр.</th>-->
<!--                                <th>СОМ</th>-->
<!--                                <th>Дост.</th>-->
<!--                                <th>Ит.</th>-->
<!---->
<!--                                <th>Вид отп.</th>-->
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
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
