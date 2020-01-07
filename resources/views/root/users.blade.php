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
                        <h3 class="card-title">Зарегистрированные пользователи</h3>
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
                                <th>Паспорт</th>
                                <th>Пол</th>
                                <th>Дата рождения</th>
                                <th>Статус</th>
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
                                <td><a href="/admin/users/{{$user->id}}"> {{$user->firstname}} {{$user->lastname}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->passport}}</td>
                                <td>{{$sex}}</td>
                                <td>{{$user->dob}}</td>
                                <?php
                                if ($user->status==999)
                                    $status='aдмин';
                                else
                                    $status='';
                                ?>
                                <td>{{$status}}
<!--                                    <div class="form-group">-->
<!--                                        <div class="custom-control custom-switch">-->
<!--                                        --><?php
//                                       // if ($user->status==999)
//                                            echo '<input type="checkbox" class="custom-control-input" id="customSwitch1'.$i.'" checked="checked" />';
//                                       // else
//                                         //   echo '<input type="checkbox" class="custom-control-input" id="customSwitch1'.$i.'" />';
//
//                                       // echo '<label class="custom-control-label" for="customSwitch1'.$i.'">'.$status.'</label>';
//                                        ?>
<!--                                        </div>-->
<!--                                    </div>-->
                                </td>
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
