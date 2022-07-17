 @extends('web.layouts.master')
@section('title')
Cart
@endsection

@section('header-title-1')
@endsection

@section('header-title-2')
@endsection

@section('body')
<!-- Shop Cart
    ============================================= -->
    <section id="shopcart" class="shop shop-cart bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="cart-product">
                                    <th class="cart-product-item">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has('cart'))
                                @foreach(session('cart') as $meal)
                                <tr id="{{$meal['id']}}" class="cart-product">
                                    <td  class="cart-product-item">
                                        <div class="cart-product-remove">
                                          
                                            <button class=" btn--primary" onclick="deleteFromCart({{$meal['id']}})">delete</button>
                                        </div>
                                        <div class="cart-product-img">
                                            <img src="{{url('storage/uploads/'.$meal['path'])}}" width="85" height="70"alt="product"/>
                                        </div>
                                        <div class="cart-product-name">
                                          <h6>{{$meal['name']}}</h6>
                                      </div>
                                  </td>
                                  <td class="cart-product-price">{{$meal['price']}} JD</td>
                                  <td class="cart-product-quantity">
                                    <div class="product-quantity">
                                        <button onclick="updateMinus({{$meal['id']}})" class=""><i class="fa fa-minus"></i></button>
                                        <input type="text" value="{{$meal['quantity']}}" id="quantity" readonly>
                                        <button onclick="updatePlus({{$meal['id']}})" class=""><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td class="cart-product-total">{{$meal['price']}} JD</td>
                            </tr>
                            @endforeach
                            @endif
                            <tr class="cart-product-action">
                                <td  colspan="4">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <form class="form-inline">
                                                <input type="text" class="form-control" id="coupon" placeholder="Coupon Code"/>
                                                <button type="submit" class="btn btn--primary btn--rounded">Apply Coupon</button>
                                            </form>
                                        </div><!-- .col-md-6 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                            <a class="btn btn--secondary btn--rounded" href="#">update cart</a>
                                            <a class="btn btn--primary btn--rounded" href="/store">Checkout</a>
                                        </div><!-- .col-md-6 end -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- .cart-table end -->
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #shopcart end -->

@endsection

@section('script')
@endsection
