<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- Title -->
    <title>Hotella</title>

    <!-- icons -->
    <link rel="icon" href="{{asset('frontend')}}/img/core-img/favicon.ico">
    <script src="https://kit.fontawesome.com/8251d93d05.js" crossorigin="anonymous"></script>    <!-- Core Stylesheet -->
    <link href="{{asset('frontend')}}/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('frontend')}}/css/responsive/responsive.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
     <!--  <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>

      <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ***** Search Form Area end***** -->

    <!-- ***** Header Area start ***** -->
    <x-_navbar/>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ****** Footer Area Start ****** -->
    <x-_footer/>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js
    <script src="{{asset('frontend')}}/js/jquery/jquery-2.2.4.min.js"></script>-->
    <!-- Popper js -->
    <script src="{{asset('frontend')}}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('frontend')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend')}}/js/others/plugins.js"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="{{asset('frontend')}}/js/google-map/explore-map-active.js"></script>
    <!-- Active JS -->
    <script src="{{asset('frontend')}}/js/active.js"></script>

    @yield('scripts');
</body>

</html>
