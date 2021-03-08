<!doctype html>
<html lang="pt-br">

<head>
        
        <meta charset="utf-8" />
        <title>Login | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('site/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('site/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('site/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('site/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @yield("styles")
    </head>

    <body>
        <div class="account-pages">
            <div class="container">
                <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
                    <div class="@yield('tamanhos')">
                        @yield("botoes")
                        <div class="card overflow-hidden">
                            @yield("conteudo")
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                
                                <p>© <script>document.write(new Date().getFullYear())</script> Asseara - Todos os direitos reservados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('site/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('site/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('site/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('site/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('site/libs/node-waves/waves.min.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('site/js/app.js')}}"></script>
        <script src="{{asset('site/js/jquery.mask.js')}}"></script>
        @yield("scripts")

    </body>

</html>
