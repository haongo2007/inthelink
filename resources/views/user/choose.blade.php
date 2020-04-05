<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset('images/logos') }}/small-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logos') }}/small-logo.png" type="image/x-icon">
    <title>Inthelink</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/fontawesome.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/color1.css" media="screen" id="color">


</head>
<body>
<div class="template-password">
    <div class="container">
        <div id="container" class="text-center">
            <div>
                <div id="login">
                    <div class="mb-4">
                        <div class="logo mb-4">
                            <a href="#">
                                <img src="{{ asset('images') }}/logos/logo.png" alt="Multikart_fashion" class="img-fluid" width="100%">
                            </a>
                        </div>
                        <h2 class="mb-3">Log into</h2>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="actions">
                            <a href="{{ route('supplier.login') }}" class="btn btn-solid" >Supplier</a>
                        </div>
                        <div class="actions">
                            <a href="{{ route('influencer.login') }}" class="btn btn-solid" >Influencer</a>
                        </div>
                    </div>
                    <div id="footer" class="mt-4">
                        
                    </div>
                </div>
                <div id="powered">
                    <p>© 2020, Powered by Buujaa.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>