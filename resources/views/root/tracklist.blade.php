@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\TrackingsController;
use App\Http\Controllers\UsersController;
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
                                <th>Имя Фамилия</th>
                                <th>Код польз.</th>
                                <th>Трек №</th>
                                <th>КГ</th>
                                <th>Наим.</th>
                                <th>За кг.</th>
                                <th>Сумм</th>
                                <th>СФ</th>
                                <th>Стр.</th>
                                <th>И($)</th>
                                <th>Сумм (лок)</th>
                                <th>Дост.</th>
                                <th>Итого</th>
                                <th>Статус</th>
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
                            $code = CodesController::getCodebyCodeId($tracking->usercode);
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
                                                        <a href="/admin/otpravkalist/{{$otpravkaname[0]->id}}">{{$otpravkaname[0]->kod}}</a>

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

                                @if (count($code) > 0)
                                <td>{{ $code[0]->code }}</td>
                                @else
                                <td></td>
                                @endif



                                <td><a href="#">{{$tracking->tracknumber}}</td></a>
                                <td>{{$tracking->kq}}</td>
                                <td>{{$tracking->naimenovanie}}</td>
                                <td>{{$tracking->zakq}}</td>
                                <td>{{$tracking->summa}}</td>
                                <td>{{$tracking->sf}}</td>
                                <td>{{$tracking->straxovka}}</td>
                                <td>{{$tracking->itoqodollar}}</td>
                                <td>{{$tracking->som}}</td>
                                <td>{{$tracking->dostavka}}</td>
                                <td>{{$tracking->itoqo}}</td>
                                @if ($tracking->status==0)
                                <td>на складе</td>
                                @else
                                <td>забрал</td>
                                @endif
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>
                                <th>Имя Фамилия</th>
                                <th>Код польз.</th>
                                <th>Трек №</th>
                                <th>КГ</th>
                                <th>Наим.</th>
                                <th>За кг.</th>
                                <th>Сумм</th>
                                <th>СФ</th>
                                <th>Стр.</th>
                                <th>И($)</th>
                                <th>Сумм (лок)</th>
                                <th>Дост.</th>
                                <th>Итого</th>
                                <th>Статус</th>
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
