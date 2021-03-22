<!doctype html>
<html lang="pt-br">

<head>
        
        <meta charset="utf-8" />
        <title>Asseara</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Asseara - Associação dos Engenheiros da Região de Alfenas" name="description" />
        <meta content="Luis Gustavo de Souza Carvalho" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('site/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('site/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('site/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('site/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

	<meta property='og:type' content='website'>
        <meta property="og:url" content="https://cadernetadeobra.com.br">
        <meta property="og:title" content="Caderneta de Obras - Asseara">
        <meta property="og:site_name" content="Caderneta de Obras">
        <meta property="og:description" content="Sistema para agilizar a emissão e gerenciamento de cadernetas de obra.">
        <meta property="og:image:secure_url" content="https://cadernetadeobra.com.br/site/images/logo_thumb.jpg">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="1200">
        @yield("styles")
    </head>

    <body style="background: url(/admin/images/banner-login.jpg);">
        
        <div class="account-pages" style="background-color: rgba(0, 152, 218, 0.3);">
            <div class="container">
                <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
                    <div class="@yield('tamanhos')">
                        @yield("botoes")
                        <div class="card overflow-hidden">
                            @yield("conteudo")
                        </div>
                        <div class="mt-5 text-center text-white">
                            
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
