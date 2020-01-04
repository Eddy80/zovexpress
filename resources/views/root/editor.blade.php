@extends('root.layout')

@section('contentadmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Заголовок:</h4>
                    <input type="text" id="shortname" value="{{ $page->shortname }}" style="width: 100%" />
                    <input type="text" id="shortnameru" value="{{ $page->shortnameru }}" style="width: 100%" />
                    <input type="text" id="shortnameen" value="{{ $page->shortnameen }}" style="width: 100%" />
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
                        <li class="breadcrumb-item active">Редактор</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{ $page->shortnameru }}</h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-success" >Сохранить</button>

                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"  title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        AZ:
                        <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 0px;">{{ $page->text }}</textarea>
                        </div>
                    </div>
                    <div class="card-body pad">
                        RU:
                        <div class="mb-3">
                            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 0px;">{{ $page->textru }}</textarea>
                        </div>
                    </div>
                    <div class="card-body pad">
                        EN:
                        <div class="mb-3">
                            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 0px;">{{ $page->texten }}</textarea>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
