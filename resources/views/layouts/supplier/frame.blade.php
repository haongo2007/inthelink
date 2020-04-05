<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logos') }}/small-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logos') }}/small-logo.png" type="image/x-icon">
    <title>InTheLink</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/admin.css">

    <!-- My custom css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/supplier.style.css">
    @stack('css')
    <script> window.base_url = '{{ asset('/') }}'; </script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        @include('layouts.supplier.header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('layouts.supplier.left_sidebar')
            @include('layouts.supplier.right_sidebar')
            @yield('content')
            @include('layouts.supplier.footer')
        </div>
    </div>


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

<!-- lazyload js-->
<script src="{{ asset('js') }}/lazysizes.min.js"></script>

<!--copycode js-->
{{-- <script src="{{ asset('js') }}/prism/prism.min.js"></script>
<script src="{{ asset('js') }}/clipboard/clipboard.min.js"></script>
<script src="{{ asset('js') }}/custom-card/custom-card.js"></script> --}}

<!--counter js-->
<script src="{{ asset('js') }}/counter/jquery.waypoints.min.js"></script>
<script src="{{ asset('js') }}/counter/jquery.counterup.min.js"></script>
<script src="{{ asset('js') }}/counter/counter-custom.js"></script>

<!--peity chart js-->
<script src="{{ asset('js') }}/chart/peity-chart/peity.jquery.js"></script>

<!--sparkline chart js-->
<script src="{{ asset('js') }}/chart/sparkline/sparkline.js"></script>

<!--Customizer admin-->
{{-- <script src="{{ asset('js') }}/admin-customizer.js"></script> --}}

<!--right sidebar js-->
<script src="{{ asset('js') }}/chat-menu.js"></script>

<!--height equal js-->
<script src="{{ asset('js') }}/height-equal.js"></script>

<!-- lazyload js-->
<script src="{{ asset('js') }}/lazysizes.min.js"></script>

<!--script admin-->
<script src="{{ asset('js') }}/admin-script.js"></script>

{{-- notify bootstrap --}}
<script src="{{ asset('js') }}/bootstrap-notify.min.js"></script>
<script src="{{ asset('js') }}/notify.script.js"></script>

@stack('js')

</body>

</html>
