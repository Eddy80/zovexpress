@extends('root.layout')

@section('contentadmin')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
        <div class="alert alert-danger">
            @if(session('status'))
            {{session('status')}}
            @endif
        </div>
    </section>
    <form name="pageform" action="/pages" method="post" >
        @csrf
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Заголовок:</h4>
                    <input type="hidden" id="id" name="id"  value="{{ $page->id }}" />
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">AZ:</label>
                            <input type="text"  class="form-control" id="shortname" name="shortname"  value="{{ $page->shortname }}" style="width: 100%" />
                            <label for="exampleInputEmail1">RU:</label>
                            <input type="text"  class="form-control" id="shortnameru" name="shortnameru" value="{{ $page->shortnameru }}" style="width: 100%" />
                            <label for="exampleInputEmail1">EN:</label>
                            <input type="text"  class="form-control" id="shortnameen" name="shortnameen" value="{{ $page->shortnameen }}" style="width: 100%" />
                        </div>
                    </div>

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
                        <span><input class="btn btn-success" type="submit" value="Сохранить" /></span>
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
                        <label for="exampleInputEmail1">AZ:</label>
                        <div class="mb-3">
                        <textarea class="textarea" id="text" name="text" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 0px;">{{ $page->text }}</textarea>
                        </div>
                    </div>
                    <div class="card-body pad">
                        <label for="exampleInputEmail1">RU:</label>
                        <div class="mb-3">
                            <textarea class="textarea" id="textru" name="textru" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 0px;">{{ $page->textru }}</textarea>
                        </div>
                    </div>
                    <div class="card-body pad">
                        <label for="exampleInputEmail1">EN:</label>
                        <div class="mb-3">
                            <textarea class="textarea" id="texten" name="texten" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 0px;">{{ $page->texten }}</textarea>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
    </form>
</div>
<!-- /.content-wrapper -->

@endsection
