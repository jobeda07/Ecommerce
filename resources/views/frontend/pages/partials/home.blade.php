<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    @notifyCss
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" type="text/css">
    
</head>

<body>


@include('notify::components.notify')      
           
        <x:notify-messages />

    <!-- Button trigger modal -->


<!-- Modal -->
@include('frontend.pages.auth.login')
@include('frontend.pages.auth.register')


    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    @include('frontend.pages.partials.humberger')
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('frontend.pages.partials.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('frontend.pages.partials.hero')
    
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    @include('frontend.pages.partials.categories')
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
   @include('frontend.pages.partials.feature')
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @include('frontend.pages.partials.latestproduct')
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    @include('frontend.pages.partials.blog')
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    @include('frontend.pages.partials.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{url('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>
    @notifyJs


</body>

</html>