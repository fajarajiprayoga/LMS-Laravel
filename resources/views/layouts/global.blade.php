<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->
    @include('includes/css')

    <title>Amikom Center | Dashboard</title>
</head>

<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('includes/sidebar')

        <!-- Page content -->
        @include('includes/navbar-header')

        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            @yield('content')
        </div>
    </div>
    </div>

    <!-- Scripts -->
    @include('includes/js')
</body>

</html>
