@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\OtpravkaController;
use App\Http\Controllers\UsersController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Все отправки</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Отправки</li>
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
                        <h3 class="card-title">Отправки</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php   $otpravkas = OtpravkaController::getList(); $i=0; ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="font-size: 12px">
                            <thead>
                            <tr>
                                <th>№</th>

                                <th>Название</th>
                                <th>Код</th>

                                <th>Гор. отп.</th>
                                <th>Дата отп.</th>
                                <th>Гор. пр.</th>
                                <th>Дата пр.</th>
                                <th>Ож. дата</th>

                                <th>%</th>
                                <th>Нах.</th>



                                <th>Дост.</th>


                                <th>Вид отп.</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($otpravkas as $otpravka)
                            <?php
                            $i++;

                            ?>


                            <tr>
                                <td>{{$i}}</td>
                                <td><span style="color: green; font-style: italic; font-weight: bold; font-size: 14px;">{{$otpravka->name}}</span></td>
                                <td><a href="/admin/otpravkalist/{{$otpravka->id}}">{{$otpravka->kod}}</a></td>


                                <td>{{$otpravka->sentfrom}}</td>
                                <td>{{$otpravka->sentdate}}</td>
                                <td>{{$otpravka->receiveto}}</td>
                                <td>{{$otpravka->receivedate}}</td>
                                <td>{{$otpravka->expectedreceivedate}}</td>

                                <td><span style="font-weight: bold;font-style: italic">{{$otpravka->nowpercent}}</span></td>
                                <td>{{$otpravka->nowplace}}</td>

                                @if ($otpravka->status==0)
                                <td><span style="color: blue">в пути</span></td>
                                @else
                                <td><span style="color: green">доставлено</span></td>
                                @endif



                                @if ($otpravka->tracktype==0)
                                <td> <img  src="../assets/img/black-plane.png"></td>
                                @else
                                <td> <img style="width: 25px; height:25px;" src="../assets/img/fast-delivery.png"></td>
                                @endif

                            </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>

                                <th>Название</th>
                                <th>Код</th>

                                <th>Гор. отп.</th>
                                <th>Дата отп.</th>
                                <th>Гор. пр.</th>
                                <th>Дата пр.</th>
                                <th>Ож. дата</th>

                                <th>%</th>
                                <th>Нах.</th>

                                <th>Дост.</th>


                                <th>Вид отп.</th>
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
