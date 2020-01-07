@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\UserController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Информация о пользователе</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/users">Пользователи</a></li>
                        <li class="breadcrumb-item active">{{ $user->firstname }} {{ $user->lastname }} </li>
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
                <h3 class="card-title" style="font-weight: bold">
                    <i class="fas fa-user"></i>
                    &nbsp;
                    {{ $user->firstname }} {{ $user->lastname }} {{ $user->surname }}
                </h3>
                @if ( $user->status != 999 )
                <span style="float: right;"><input class="btn btn-success" type="submit" value="Сделать Админом" /></span>
                @else
                    @if ( $user->id != 1 )
                    <span style="float: right;"><input class="btn btn-success" type="submit" value="Сделать Пользователем" /></span>
                    @endif
                @endif

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>Номер:</dt>
                    <dd>{{ $user->id }}</dd>
                    <dt>Статус:</dt>
                    <dd>@if ($user->status==999) Админ @else Пользователь @endif</dd>
                    <dt>Дата регистрации:</dt>
                    <dd>{{date('d.m.Y', strtotime($user->created_at))}}.</dd>
                    <dt>Дата рождения:</dt>
                    <dd>{{date('d.m.Y', strtotime($user->dob))}}</dd>
                    <dt>Телефон:</dt>
                    <dd>{{ $user->phone }}</dd>
                    <dt>Email:</dt>
                    <dd>{{ $user->email }}</dd>
                    <dt>Паспорт:</dt>
                    <dd>{{ $user->passport }}</dd>
                    <dt>Пол:</dt>
                    <dd>@if ($user->gender==0) Мужчина @else Женшина @endif</dd>
                    <dt>Описание:</dt>
                    <dd>{{ $user->description }}</dd>

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
