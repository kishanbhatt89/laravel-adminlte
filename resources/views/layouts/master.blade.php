
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link href="./img/favicon.png" rel="icon" type="image/png">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    </head>

    <body class="hold-transition sidebar-mini">

        <div class="wrapper" id="app">

            @include('partials.navbar')

            @include('partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @include('partials.breadcrumbs')

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">

                            @yield('content')

                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->

            </div>
            <!-- /.content-wrapper -->

            @include('partials.footer')

        </div>
        <!-- ./wrapper -->
    </body>
</html>
