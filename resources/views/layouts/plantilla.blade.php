<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> @yield('titulo', 'UPTYAB') </title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />


    <!-- CSS Archivos -->
    <link rel="stylesheet" href=" {{ asset('vendor/bootstrap/css/bootstrap.min.css') }} " />
    <link rel="stylesheet" href=" {{ asset('css/plugins.min.css') }} " />
    <link rel="stylesheet" href=" {{ asset('css/kaiadmin.min.css') }} " />
    <link rel="stylesheet" href=" {{ asset('vendor/fontawesome/css/all.min.css') }} " />
    <link rel="stylesheet" href=" {{ asset('css/styles.css') }} " />

</head>

<body>
    {{-- Menú lateral --}}
    <x-sidebar />


    <div class="main-panel">
        {{-- Navbar o Menú superior --}}
        <x-navbar />

        {{-- Contenido principal --}}
        <div class="container">
            <div class="page-inner">
                @yield('content')
            </div>
        </div>
        {{-- Fin del contenido principal --}}

        {{-- Footer o Pie de página --}}
        <x-footer />
    </div>

    <!--   Archivos JS   -->
    <script src=" {{ asset('vendor/popper/popper.min.js') }} "></script>
    <script src=" {{ asset('vendor/jquery-3.7.1/jquery-3.7.1.min.js') }} "></script>
    <script src=" {{ asset('vendor/bootstrap/js/bootstrap.min.js') }} "></script>

    <!-- jQuery Scrollbar -->
    <script src=" {{ asset('vendor/jquery-scrollbar/jquery.scrollbar.min.js') }} "></script>

    <!-- Kaiadmin JS -->
    <script src=" {{ asset('js/kaiadmin.min.js') }} "></script>

</body>

</html>
