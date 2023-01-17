<div class="col-lg-9 col-md-7">
                    
   <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                          

             <div class="filter__sort">
                                    <select name="link" size="1" onchange="window.location.href=this.value;">
                                    <option value="">Sort By</option>
                                        <option value="{{route('search',['search_key='.request()->search_key.'&order_by=desc'])}}">Price high to low</option>
                                        <option value="{{route('search',['search_key='.request()->search_key.'&order_by=asc'])}}">Price low to high</option>
                                    </select>
                                </div>


                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{$products->count()}}</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                

                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{url('/uploads/productimg/',$product->Product_image)}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{$product->Product_name}}</a></h6>
                                    <h5>{{$product->Product_price}}</h5>
                                </div>
                            </div>
                        </div>

                        @endforeach  
                    </div>
                    <div class="d-flex justify-content-center">
                     
                   </div>
                    
                </div>