@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\CountryController;
use App\Http\Controllers\InvoiceController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Все накладные</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Накладные</li>
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
                        <h3 class="card-title">Накладные</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php   $invoices = InvoiceController::getList(); $i=0; ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="font-size: 12px">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Страна</th>
                                <th>Код клиента</th>
                                <th>Трэк посылки</th>
                                <th>Линк товара</th>
                                <th>Вес, кг.</th>
                                <th>За кг.</th>
                                <th>Цвет</th>
                                <th>Кол-во</th>
                                <th>Сумма</th>
                                <th>Куайди</th>
                                <th>Страховка</th>
                                <th>Итого$</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                             
                            <?php   $invoices = InvoiceController::getList(); $i=0; ?>
                                @foreach($invoices as $invoice)
                                <?php 
                                $i++;
                                $countryname = CountryController::getNameById($invoice->countryid); 
                                ?>
                                <tr>
                                <td>{{$i}}</td>    
                                <td>{{$countryname->nameru}}</td>
                                <td>{{$invoice->personalcode}}</td>
                                <td></td>
                                <td><a href="/admin/invoicelist/{{$invoice->id}}">{{$invoice->link}}</td>
                                <td>{{$invoice->size}}</td>
                                <td>2</td>
                                <td>{{$invoice->color}}</td>
                                <td>{{$invoice->count}}</td>
                                <td>{{$invoice->price}}</td>
                                <td>0</td>
                                <td>0</td>
                                <td>{{$invoice->endprice}}</td>
                                </tr>
                                @endforeach
                                
                             
                                    

                            
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>#</th>
                                <th>Страна</th>
                                <th>Код клиента</th>
                                <th>Трэк посылки</th>
                                <th>Линк товара</th>
                                <th>Вес, кг.</th>
                                <th>За кг.</th>
                                <th>Цвет</th>
                                <th>Кол-во</th>
                                <th>Сумма</th>
                                <th>Куайди</th>
                                <th>Страховка</th>
                                <th>Итого$</th>
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
