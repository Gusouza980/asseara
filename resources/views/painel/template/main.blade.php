<!doctype html>
<html lang="pt-br">
    
<head>
        
        <meta charset="utf-8" />
        <title>Asseara - Painel Administrativo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Painel administrativo da Asseara" name="description" />
        <meta content="Luis Gustavo de Souza Carvalho" name="author" />
        <meta name="_token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @toastr_css
        @yield("styles")
    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{route('painel.index')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    {{--  <img src="{{asset('admin/images/logo-gefit-branco.png')}}" alt="" width="100">  --}}
                                </span>
                                <span class="logo-lg">
                                    {{--  <img src="{{asset('admin/images/logo-g.png')}}" alt="" width="100">  --}}
                                </span>
                            </a>

                            <a href="{{route('painel.index')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    {{--  <img src="{{asset('admin/images/logo-g.png')}}" alt="" style="max-width: 25px;">  --}}
                                </span>
                                <span class="logo-lg">
                                    {{--  <img src="{{asset('admin/images/logo-gefit-branco.png')}}" alt="" width="100">  --}}
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>


                    </div>

                    <div class="d-flex">

                        {{--  <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>  --}}

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{session()->get("usuario")["nome"]}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="{{route('painel.sair')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Sair</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled mt-3" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{route('painel.index')}}" class="waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span key="t-dashboards">Início</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('painel.responsaveis')}}" class="waves-effect">
                                    <i class="mdi mdi-account-hard-hat"></i>
                                    <span key="t-dashboards">Responsáveis</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('painel.ordem.analise')}}" class="waves-effect">
                                    <i class="far fa-copy"></i>
                                    <span key="t-dashboards">Ordens</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <div class="col-6 text-start">
                                        <h4 class="mb-sm-0 font-size-18">@yield("titulo")</h4>
                                    </div>
                                    <div class="col-6 text-end">
                                        @yield("botoes")
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        @yield("conteudo")                  
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © ASSEARA.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by 7 Seven Trends
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>
        @toastr_js
        @toastr_render

        <!-- dashboard init -->
        {{-- <script src="{{asset('admin/js/pages/dashboard.init.js')}}"></script> --}}

        <!-- App js -->
        <script src="{{asset('admin/js/app.js')}}"></script>
        @yield("scripts")

    </body>

</html>