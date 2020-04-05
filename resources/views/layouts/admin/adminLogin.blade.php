<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Admin - Login</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/themify.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/admin.css">

</head>
<body>
    
    @yield('content')


    <!-- latest jquery-->
    <script src="{{ asset('js') }}/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('js') }}/popper.min.js"></script>
    <script src="{{ asset('js') }}/bootstrap.js"></script>

    <!-- feather icon js-->
    <script src="{{ asset('js') }}/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('js') }}/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('js') }}/sidebar-menu.js"></script>
    <script src="{{ asset('js') }}/slick.js"></script>

    <!-- Jsgrid js-->
    <script src="{{ asset('js') }}/jsgrid/jsgrid.min.js"></script>
    <script src="{{ asset('js') }}/jsgrid/griddata-invoice.js"></script>
    <script src="{{ asset('js') }}/jsgrid/jsgrid-invoice.js"></script>

    <!-- lazyload js-->
    <script src="{{ asset('js') }}/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="{{ asset('js') }}/chat-menu.js"></script>

    <!--script admin-->
    <script src="{{ asset('js') }}/admin-script.js"></script>
    <script>
        $('.single-item').slick({
                arrows: false,
                dots: true
            }
        );
    </script>

</body>
</html>
