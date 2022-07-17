@extends('web.layouts.master')
@section('title')
Home
@endsection

@section('header-title-1')

@endsection

@section('header-title-2')
Recent orders
@endsection

@section('header-title-3')

@endsection

@section('body')
<section id="pricing" class="pricing text-center bg-white">
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 orders-table">
			<div class=" heading--title">
				<div id="shopcart" class="">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="cart-table table-responsive">
									@foreach($orders as $order)
									<div class="created-div">{{$order->created_at}}</div>
									<table class="table table-bordered">
										<thead>
											<tr class="cart-product">
												<th class="cart-product-item">Products</th>
												<th class="cart-product-price">Price</th>
												<th class="cart-product-total">quantity</th>
											</tr>
										</thead>
										<tbody>
											@foreach($order->orderMeals as $order_meal)
											<tr class="cart-product">
												<td class="cart-product-item">
												</div>
												<div class="cart-product-img">
													<img src="{{url('storage/uploads/'.$order_meal->meal->mealImages[0]->path)}}" width="85" height="70" alt="product" />
												</div>
												<div class="cart-product-name">
													<h6>{{$order_meal->meal->name}}</h6>
												</div>
											</td>
											<td class="cart-product-price">{{$order_meal->meal->price}}</td>
											<td class="cart-product-price">{{$order_meal->quantity}}</td>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@endforeach
						</div>
						<!-- .cart-table end -->
					</div>
					<!-- .col-md-6 end -->
				</div><!-- .row end -->
			</div><!-- .container end -->
		</div><!-- #shopcart end -->
	</div>
</div>
</div>
</section>
@endsection

@section('script')
@endsection