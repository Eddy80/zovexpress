@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\TrackingsController;
use App\Http\Controllers\UsersController;
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
                                <th>Имя и фам.</th>
                                <th>Код поль.</th>
                                <th>Трек номер</th>
                                <th>Город отпр.</th>
                                <th>Дата отпр.</th>
                                <th>Город приб.</th>
                                <th>Дата приб.</th>
                                <th>Ожид. дата</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($trackings as $tracking)
                            <?php
                            $i++;
                            $user2 = UsersController::getUserFLNames($tracking->userid);
                            ?>


                            <tr>
                                <td>{{$i}}</td>
                                @if (count($user2) > 0)
                                <td>{{ $user2[0]->firstname }} {{ $user2[0]->lastname }}</td>
                                @else
                                <td></td>
                                @endif
                                <td>{{$tracking->usercode}}</td>

                                <td><a href="#">{{$tracking->tracknumber}}</td></a>
                                <td>{{$tracking->sentfrom}}</td>
                                <td>{{$tracking->sentdate}}</td>
                                <td>{{$tracking->receiveto}}</td>
                                <td>{{$tracking->receivedate}}</td>
                                <td>{{$tracking->expectedreceivedate}}</td>
                                @if ($tracking->status==0)
                                <td>в пути</td>
                                @else
                                <td>доставлено</td>
                                @endif

                            </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                            <th>№</th>
                            <th>Имя и фам.</th>
                            <th>Код поль.</th>
                            <th>Трек номер</th>
                            <th>Город отпр.</th>
                            <th>Дата отпр.</th>
                            <th>Город приб.</th>
                            <th>Дата приб.</th>
                            <th>Ожид. дата</th>
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
