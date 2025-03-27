<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HNT - Bakers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('client/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('client/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('client/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('client/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('client/css/style.css')}}" rel="stylesheet">

     
    
    <link rel="stylesheet" href="{{ url('client/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('client/css/plugins/nouislider/nouislider.css')}}">

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')




<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('client/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('client/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('client/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('client/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('client/lib/owlcarousel/owl.carousel.min.js')}}"></script>



    <script src="{{ url('client/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{ url('client/js/superfish.min.js')}}"></script>
    <script src="{{ url('client/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ url('client/js/jquery.elevateZoom.min.js') }}"></script>
    <script src="{{ url('client/js/bootstrap-input-spinner.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{url('client/js/main.js')}}"></script>
</body>

</html>