<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZOV-Express Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/root/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/assets/root/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets/root/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="/assets/root/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="/assets/root/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/assets/root/plugins/select2/css/select2.css">
    <link rel="stylesheet" href="/assets/root/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="/assets/root/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/assets/root/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/root/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/assets/root/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/assets/root/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/assets/root/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/root/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/admin" class="nav-link">Главная</a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="javascript:history.back()" class="nav-link">Назад</a>
            </li>
<!--            <li class="nav-item d-none d-sm-inline-block">-->
<!--                <a href="#" class="nav-link">Обратная связь</a>-->
<!--            </li>-->
        </ul>

        <!-- SEARCH FORM -->
<!--        <form class="form-inline ml-3">-->
<!--            <div class="input-group input-group-sm">-->
<!--                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
<!--                <div class="input-group-append">-->
<!--                    <button class="btn btn-navbar" type="submit">-->
<!--                        <i class="fas fa-search"></i>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->

        <!-- Right navbar links -->
<!--        <ul class="navbar-nav ml-auto">-->
<!--            <!-- Messages Dropdown Menu -->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link" data-toggle="dropdown" href="#">-->
<!--                    <i class="far fa-comments"></i>-->
<!--                    <span class="badge badge-danger navbar-badge">3</span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
<!--                    <a href="#" class="dropdown-item">-->
<!--                        <!-- Message Start -->
<!--                        <div class="media">-->
<!--                            <img src="assets/root/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">-->
<!--                            <div class="media-body">-->
<!--                                <h3 class="dropdown-item-title">-->
<!--                                    Brad Diesel-->
<!--                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
<!--                                </h3>-->
<!--                                <p class="text-sm">Call me whenever you can...</p>-->
<!--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        Message End -->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item">-->
<!--                         Message Start -->
<!--                        <div class="media">-->
<!--                            <img src="assets/root/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
<!--                            <div class="media-body">-->
<!--                                <h3 class="dropdown-item-title">-->
<!--                                    John Pierce-->
<!--                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
<!--                                </h3>-->
<!--                                <p class="text-sm">I got your message bro</p>-->
<!--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                         Message End -->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item">-->
<!--                        Message Start -->
<!--                        <div class="media">-->
<!--                            <img src="assets/root/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
<!--                            <div class="media-body">-->
<!--                                <h3 class="dropdown-item-title">-->
<!--                                    Nora Silvester-->
<!--                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
<!--                                </h3>-->
<!--                                <p class="text-sm">The subject goes here</p>-->
<!--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                         Message End -->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
<!--                </div>-->
<!--            </li>-->
            <!-- Notifications Dropdown Menu -->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link" data-toggle="dropdown" href="#">-->
<!--                    <i class="far fa-bell"></i>-->
<!--                    <span class="badge badge-warning navbar-badge">15</span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
<!--                    <span class="dropdown-item dropdown-header">15 Notifications</span>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item">-->
<!--                        <i class="fas fa-envelope mr-2"></i> 4 new messages-->
<!--                        <span class="float-right text-muted text-sm">3 mins</span>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item">-->
<!--                        <i class="fas fa-users mr-2"></i> 8 friend requests-->
<!--                        <span class="float-right text-muted text-sm">12 hours</span>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item">-->
<!--                        <i class="fas fa-file mr-2"></i> 3 new reports-->
<!--                        <span class="float-right text-muted text-sm">2 days</span>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">-->
<!--                    <i class="fas fa-th-large"></i>-->
<!--                </a>-->
<!--            </li>-->
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
            <img src="/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Админ Панель</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/assets/root/dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->firstname.' '.Auth::user()->lastname}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Настройки
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview" style="background-color: #00366c;">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-key nav-icon"></i>
                                    <p>Поменять пароль</p>
                                </a>
                            </li>
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="fas fa-history nav-icon"></i>-->
<!--                                    <p>История</p>-->
<!--                                </a>-->
<!--                            </li>-->
                            <li class="nav-item">
                                <a href="{{url('logout')}}" class="nav-link active">
                                    <i class="fas fa-sign-out-alt nav-icon"></i>
                                    <p>Выход</p>
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li class="nav-item">
                        <a href="{{url('pricelist')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Калькулятор
                                <!-- <span class="right badge badge-danger">Цены</span>-->
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-shipping-fast"></i>
                            <p>
                                Отправки
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="background-color: rgba(80,80,80,0.63);">
                            <li class="nav-item">
                                <a href="{{url('addotpravka')}}" class="nav-link">
                                    <i class="fas fa-cart-plus nav-icon"></i>
                                    <p>Добавить отправку</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('otpravkalist')}}" class="nav-link">
                                    <i class="nav-icon fas fa-th-list"></i>
                                    <p>Список отправок</p>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Посылки
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="background-color: rgba(80,80,80,0.63);">
                            <li class="nav-item">
                                <a href="{{url('addtrack')}}" class="nav-link">
                                    <i class="fas fa-cart-plus nav-icon"></i>
                                    <p>Добавить посылку</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('tracklist')}}" class="nav-link">
                                    <i class="nav-icon fas fa-th-list"></i>
                                    <p>Список посылок</p>
                                </a>
                            </li>

                        </ul>
                    </li>


 <!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-copy"></i>-->
<!--                            <p>-->
<!--                                Layout Options-->
<!--                                <i class="fas fa-angle-left right"></i>-->
<!--                                <span class="badge badge-info right">6</span>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/layout/top-nav.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Top Navigation</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/layout/boxed.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Boxed</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/layout/fixed-sidebar.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Fixed Sidebar</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/layout/fixed-topnav.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Fixed Navbar</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/layout/fixed-footer.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Fixed Footer</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Collapsed Sidebar</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-chart-pie"></i>-->
<!--                            <p>-->
<!--                                Charts-->
<!--                                <i class="right fas fa-angle-left"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/charts/chartjs.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>ChartJS</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/charts/flot.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Flot</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/charts/inline.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Inline</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-tree"></i>-->
<!--                            <p>-->
<!--                                UI Elements-->
<!--                                <i class="fas fa-angle-left right"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/general.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>General</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/icons.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Icons</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/buttons.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Buttons</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/sliders.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Sliders</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/modals.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Modals & Alerts</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/navbar.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Navbar & Tabs</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/timeline.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Timeline</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/UI/ribbons.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Ribbons</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li class="nav-item has-treeview">
                        <a href="{{url('users')}}" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Пользователи
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{url('comments')}}" class="nav-link">
                            <i class="fas fa-comment nav-icon"></i>
                            <p>Отзывы</p>
                        </a>

                    </li>
<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-table"></i>-->
<!--                            <p>-->
<!--                                Tables-->
<!--                                <i class="fas fa-angle-left right"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/tables/simple.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Simple Tables</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/tables/data.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>DataTables</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/tables/jsgrid.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>jsGrid</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-header">EXAMPLES</li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="pages/calendar.html" class="nav-link">-->
<!--                            <i class="nav-icon far fa-calendar-alt"></i>-->
<!--                            <p>-->
<!--                                Calendar-->
<!--                                <span class="badge badge-info right">2</span>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="pages/gallery.html" class="nav-link">-->
<!--                            <i class="nav-icon far fa-image"></i>-->
<!--                            <p>-->
<!--                                Gallery-->
<!--                            </p>-->
<!--                        </a>-->
<!--                    </li>-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Почта
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="background-color: rgba(80,80,80,0.63);">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-envelope nav-icon"></i>
                                    <p>Входящие</p>
                                </a>
                            </li>
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="nav-icon fas fa-edit"></i>-->
<!--                                    <p>Написать</p>-->
<!--                                </a>-->
<!--                            </li>-->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-envelope-open nav-icon"></i>
                                    <p>Прочитанные</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{url('contacts')}}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Контакты
<!--                                <i class="fas fa-angle-left right"></i>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{url('links')}}" class="nav-link">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                Социальные сети
                                <!--                                <i class="fas fa-angle-left right"></i>-->
                            </p>
                        </a>
<!--                        <ul class="nav nav-treeview" style="background-color: rgba(80,80,80,0.63);">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!---->
<!--                                    <i class="fas fa-map-marked-alt nav-icon"></i>-->
<!--                                    <p>Адрес</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!---->
<!--                                    <i class="nav-icon fas fa-phone"></i>-->
<!--                                    <p>Телефон</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="fas fa-at nav-icon"></i>-->
<!--                                    <p>Email</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Страницы
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="background-color: rgba(80,80,80,0.63);">

                            <li class="nav-item">
                                <a href="/admin/pages/1" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>МЕЖД. КУРЬЕР СЕРВИС</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/pages/23" class="nav-link">
                                    <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                    <p>О нас</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/pages/13" class="nav-link">
                                    <i class="fa fa-paper-plane nav-icon"></i>
                                    <p>Виды отправок и сроки</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/pages/12" class="nav-link">
                                    <i class="fa fa-text-width nav-icon"></i>
                                    <p>Информация о TASCO</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/pages/14" class="nav-link">
                                    <i class="fa fa-minus-square nav-icon"></i>
                                    <p>Запрещенные товары</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/pages/15" class="nav-link">
                                    <i class="fa fa-map-marker nav-icon"></i>
                                    <p>Отслеживание товаров</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/pages/22" class="nav-link">
                                    <i class="fas fa-copy nav-icon"></i>
                                    <p>Пользов. соглашение</p>
                                </a>
                            </li>

                        </ul>
                    </li>

<!--                    <li class="nav-header">Пользователи</li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-file"></i>-->
<!--                            <p>Регистрированные</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-file"></i>-->
<!--                            <p>Не Регистрированные</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-file"></i>-->
<!--                            <p>Администраторы</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="fas fa-circle nav-icon"></i>-->
<!--                            <p>Level 1</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-circle"></i>-->
<!--                            <p>-->
<!--                                Level 1-->
<!--                                <i class="right fas fa-angle-left"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Level 2</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item has-treeview">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>-->
<!--                                        Level 2-->
<!--                                        <i class="right fas fa-angle-left"></i>-->
<!--                                    </p>-->
<!--                                </a>-->
<!--                                <ul class="nav nav-treeview">-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="far fa-dot-circle nav-icon"></i>-->
<!--                                            <p>Level 3</p>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="far fa-dot-circle nav-icon"></i>-->
<!--                                            <p>Level 3</p>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="far fa-dot-circle nav-icon"></i>-->
<!--                                            <p>Level 3</p>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Level 2</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="fas fa-circle nav-icon"></i>-->
<!--                            <p>Level 1</p>-->
<!--                        </a>-->
<!--                    </li>-->

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


@yield('contentadmin' )

<!--    <footer class="main-footer">-->
<!--        <strong>Copyright &copy; 2019 <a href="http://adminlte.io">ZovExpress Admin Panel</a>.</strong>-->
<!--       Все права зашищены.-->
<!--        <div class="float-right d-none d-sm-inline-block">-->
<!--            <b>Version</b> 1.0.0-->
<!--        </div>-->
<!--    </footer>-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- jQuery -->
<script src="/assets/root/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/assets/root/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/assets/root/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/assets/root/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/assets/root/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/assets/root/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/root/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/assets/root/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/assets/root/plugins/moment/moment.min.js"></script>
<script src="/assets/root/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/assets/root/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/assets/root/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/root/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/root/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/root/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/root/dist/js/demo.js"></script>


<!-- DataTables -->
<script src="/assets/root/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets/root/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Select2 -->
<script src="/assets/root/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="/assets/root/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="/assets/root/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- bootstrap color picker -->
<script src="/assets/root/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Bootstrap Switch -->
<script src="/assets/root/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>



<!-- page script -->
<script>
    $(function () {
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": true
        });
    });
</script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })

    function getCodeList()
    {
        var userid = $('#userid').val();

        $.get("{{ URL::to('usercodelist') }}",{ userid:userid}, function(data){

                var sel = $("#usercode");
                sel.empty();
                for (var i=0; i<data.length; i++) {
                    sel.append('<option value="' + data[i].code + '">' + data[i].code+'  -  '+ data[i].nameru+ '</option>');
                }
            }, "json");
    }

    function getUserIdByCodeId()
    {
        var codeid = $('#usercode').val();

        //alert(codeid);

        $.get("{{ URL::to('userbycode') }}",{ codeid:codeid}, function(data){
            //alert(data);
            var sel = $("#userid");
            sel.empty();
            for (var i=0; i<data.length; i++) {
                sel.append('<option value="' + data[i].id + '">' +''+ data[i].firstname+' '+ data[i].lastname +',  '+ data[i].email +',  ' + data[i].phone + '</option>');
            }
        }, "json");
    }

</script>
</body>
</html>


