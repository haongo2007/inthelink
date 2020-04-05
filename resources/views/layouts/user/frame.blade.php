<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Inthelink">
    <meta name="keywords" content="Inthelink">
    <meta name="author" content="haongodev@gmail.com">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @stack('meta')
    <link rel="icon" href="{{ asset('images/logos') }}/small-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logos') }}/small-logo.png" type="image/x-icon">
    <title>@isset($pageSlug) {{ 'INTHELINK - '.$pageSlug }} @else Inthelink @endisset</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/color12.css" media="screen" id="color">

    <!-- user css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/user.style.css" media="screen" id="color">

    <script> window.base_url = '{{ asset('/') }}'; </script>
</head>

<body>
    
    @include('layouts.user.header')
    @yield('content')
    @include('layouts.user.footer')
    @include('layouts.user.modal')


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


<!-- latest jquery-->
<script src="{{ asset('js') }}/jquery-3.3.1.min.js"></script>

<!-- menu js-->
<script src="{{ asset('js') }}/menu.js"></script>

<!-- lazyload js-->
<script src="{{ asset('js') }}/lazysizes.min.js"></script>

<!-- popper js-->
<script src="{{ asset('js') }}/popper.min.js"></script>

<!-- slick js-->
<script src="{{ asset('js') }}/slick.js"></script>

<!-- Bootstrap js-->
<script src="{{ asset('js') }}/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="{{ asset('js') }}/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="{{ asset('js') }}/script.js"></script>
<script src="{{ asset('js') }}/notify.script.js"></script>
@stack('js')
<script>
    $(window).on('load', function() {
        //$('#exampleModal').modal('show');
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }
    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>
@include('layouts.notify.success')
@include('layouts.notify.error')
</body>

</html>