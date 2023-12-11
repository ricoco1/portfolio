<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstarp/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/boxicon/css/boxicons.min.css') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="vendors/fontawesome-free-6.4.2-web/js/all.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="bg-dark">
    @yield('content')
    <footer class="py-3">
        <div class="container">
            <p class="text-white fs-7 mb-0">Copyright &copy; 2023 Rico Pratama. All Right Reserved</p>
        </div>
    </footer>
    <script src="{{ asset('vendors/bootstarp/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
