<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.pages.partials.csslink')
    
</head>

<body>


@include('notify::components.notify')      
           

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
    @include('frontend.pages.partials.jslink')

    


</body>

</html>