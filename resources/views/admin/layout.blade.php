<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>@yield('title')</title>
        <link href="{{ asset("assets/admin/css/style.min.css") }}" rel="stylesheet"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @yield('customstyle')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.inc.navbar')
        <div id="layoutSidenav">
            @include('admin.inc.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                @include('admin.inc.footer')
            </div>
        </div>
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="{{ asset("assets/js/popper.min.js") }}"></script>
        <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("assets/admin/js/scripts.js") }}"></script>
        @yield('customscript')
    </body>
</html>
