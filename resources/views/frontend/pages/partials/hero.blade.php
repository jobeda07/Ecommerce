<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                      @foreach($categories as $category)
                        <ul>
                            <li>{{$category->category_name}}</li>
                            
                        </ul>
                      @endforeach
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{route('search')}}" method="get">
                                
                                <input type="text" name="search_key" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div>
                    <div class="hero__item set-bg" data-setbg="{{url('frontend/img/hero/banner-and-eCommerce.png')}}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="{{route('shop.page')}}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>