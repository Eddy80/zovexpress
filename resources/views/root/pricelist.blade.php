@extends('root.layout')

@section('contentadmin')
<?php
use App\Http\Controllers\PriceController;
use App\Http\Controllers\CountryController;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Цены по странам </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Цены для калькуляции</li>
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
                        <h3 class="card-title">Цены</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php   $prices = PriceController::getList(); $i=0; ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="font-size: 12px">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Наименование</th>
                                <th>Из страны</th>
                                <th>Вес (кг.)</th>
                                <th>В страну</th>
                                <th>Цена ($)</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($prices as $price)
                            <?php
                            $i++;
                            $from = CountryController::getNameById($price->from_country_id);
                            $to = CountryController::getNameById($price->to_country_id);
                            ?>




                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$price->title}}</td>


                                <td>{{ $from->nameru }}</td>


                                <td>{{$price->weight}}</td>


                                <td>{{ $to->nameru }}</td>


                                <td>{{$price->price_usd}}</td>
                            </tr>

                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>№</th>
                                <th>Наименование</th>
                                <th>Из страны</th>
                                <th>Вес (кг.)</th>
                                <th>В страну</th>
                                <th>Цена ($)</th>
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
