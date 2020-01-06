@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UsersController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Отзывы</h1>
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
                        <h3 class="card-title">отзывы</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php   $comments = CommentController::getComments(); $i=0; ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Пользователь</th>
                                <th>Коммент</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($comments as $comment)
                            <?php $i++;
                            $userid =  $comment->userid;
                            $user = UsersController::getUserFLNames($userid);
                            ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{ $user[0]->firstname }} {{ $user[0]->lastname }} </td>
                                <td>{{$comment->textru}}</td>

                            </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>
                                <th>Пользователь</th>
                                <th>Коммент</th>
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
