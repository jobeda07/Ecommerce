<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(session()->has('myCart'))
                                @foreach(session()->get('myCart') as $key=>$cart)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img style="width:80px !important;" src="{{url('uploads/Productimg/',$cart['image'])}}" alt="img not found">
                                        <h5>{{$cart['product_name']}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    {{$cart['product_price']}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$cart['product_quantity']}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    {{$cart['product_price']}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{route('cart.item.delete',$key)}}">   
                                    <span class="icon_close"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                        
                            <li>Total <span>{{array_sum(array_column(session()->get('myCart'),'subtotal'))}}BDT</span></li>
                        </ul>
                        <a href="{{route('orderpage')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>