<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio Rico</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstarp/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/boxicon/css/boxicons.min.css') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="vendors/fontawesome-free-6.4.2-web/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    
</head>

<body class="bg-dark">
    @yield('content')
    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="text-white fs-7 mb-0">Copyright &copy; 2023 Rico Pratama. All Right Reserved</p>
            </div>
        </div>
    </footer>
    <script src="js/scripts.js"></script>
    <script src="{{ asset('vendors/bootstarp/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
