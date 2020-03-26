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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Главная страница</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <?php $tracingscount = TrackingsController::getCount();  ?>
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$tracingscount}}</h3>

                            <p>Посылок</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="/tracklist" class="small-box-footer">Открыть <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <?php $otpravkacount = OtpravkaController::getCount();  ?>
                    <div class="small-box bg-success">
                        <div class="inner">
<!--                            <h3>53<sup style="font-size: 20px">%</sup></h3>-->
                            <h3>{{$otpravkacount}}</h3>

                            <p>Отправок</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="/otpravkalist" class="small-box-footer">Открыть <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <?php $userscount = UsersController::getMembersCount();  ?>
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$userscount}}</h3>

                            <p>Пользователей</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('users')}}" class="small-box-footer">Открыть <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <?php $otpravkacount = OtpravkaController::getCountDostavleno();  ?>
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $otpravkacount}}</h3>

                            <p>Доставлено</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="/otpravkalist" class="small-box-footer">Открыть <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

</div>
<!-- /.content-wrapper -->

@endsection
