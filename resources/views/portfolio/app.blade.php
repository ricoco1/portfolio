<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstarp/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/boxicon/css/boxicons.min.css') }}">
<<<<<<< HEAD
    <!-- Font Awesome icons (free version)-->
    <script src="vendors/fontawesome-free-6.4.2-web/js/all.js" crossorigin="anonymous"></script>
=======
    
    <!-- Font Awesome icons (free version)-->
    <script src="vendors/fontawesome-free-6.4.2-web/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
>>>>>>> 86cd0bf8842162003482d37b389642ecdafdd35f
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
