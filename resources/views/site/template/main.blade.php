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

        <meta property="og:url" content="https://cadernetadeobra.com.br">
        <meta property="og:title" content="Caderneta de Obras - Asseara">
        <meta property="og:site_name" content="Caderneta de Obras">
        <meta property="og:description" content="Sistema para agilizar a emissão e gerenciamento de cadernetas de obra.">
        <meta property="og:image" content="https://cadernetadeobra.com.br/site/images/asseara-logo-branca.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1501"> /** PIXELS **/
        <meta property="og:image:height" content="837"> /** PIXELS **/

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
