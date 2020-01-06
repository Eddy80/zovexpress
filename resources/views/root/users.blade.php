@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\UsersController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Пользователи</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
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
                        <h3 class="card-title">Зарегистрированные</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php   $users = UsersController::getUsers(); $i=0; ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Имя и фамилия</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Паспорт</th>
                                <th>Пол</th>
                                <th>Дата рождения</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $sex='м';?>
                            @foreach($users as $user)
                            <?php
                            $i++;
                            if ($user->gender==0)
                                $sex='м';
                            else
                                $sex='ж';
                            ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->firstname}} {{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->passport}}</td>
                                <td>{{$sex}}</td>
                                <td>{{$user->dob}}</td>
                            </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>
                                <th>Имя и фамилия</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Паспорт</th>
                                <th>Пол</th>
                                <th>Дата рождения</th>
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
