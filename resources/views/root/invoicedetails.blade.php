@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\InvoiceController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование накладной</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/admininvoicelist">Накладные</a></li>
                        <li class="breadcrumb-item active">{{ $invoice->size }} </li>
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
                <form  name="otpravkaform" action="/updateoinvoice" method="post" >
                    {{csrf_field()}}
                <h3 class="card-title" style="font-weight: bold">
                    <i class="fas fa-shipping-fast"></i>
                    &nbsp;
                    Введите данные

                    <input type="hidden" id="id" name="id" value="{{$invoice->id}}" />
                </h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <dl class="dl-horizontal">
                    <dt>Название:</dt>
                    <dd>{{ $invoice->link }}</dd>
                    
                    <dt>Посылка:</dt>
                    <dd>
                        <select name="nowpercent" onchange="">
                            <option value="{{ $invoice->size }}">{{ $invoice->size }}</option>
                            
                        </select>
                    </dd>
                    <dt>Цвет:</dt>
                    <dd><input type="text" value="{{ $invoice->color }}" name="nowplace" /></dd>
                    
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
