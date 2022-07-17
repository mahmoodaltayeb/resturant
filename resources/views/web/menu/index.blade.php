@extends('web.layouts.master')
@section('title')
Home
@endsection

@section('header-title-1')
Fresh, Tasty Meals
@endsection

@section('header-title-2')
Discover Our Menu
@endsection

@section('header-title-3')

@endsection

@section('body')

</section>
<!-- #page-title end -->

<!-- Menu Simple
	============================================= -->
	<section id="menuSimple">
		<div class="container-fluid pr-0 pl-0 tabs">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
						<li class="active"><a href="#lunch" data-toggle="tab">Lunch</a></li>
						<li><a href="#dinner" data-toggle="tab">Dinner</a></li>
						<li><a href="#drinks" data-toggle="tab">Drinks</a></li>
					</ul>
					<!-- Tab panes -->
					@foreach($meals as $meal)
					@if($meal->category_id == 1)
					<div class="tab-content">
						<div class="tab-pane fade" id="breakfast">
                        <!--breakfast Menu
                        	============================================= -->
                        	<div class="menu-simple">
                        		<div class="container">
                        			<div class="row">
                        				<!-- Dish -->
                        				<div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts filter-soup">
                        					<div class="product-item">
                        						<div class="product--img">
                        							@if($meal->mealImages[0]->path)
                        							<img src="{{url('storage/uploads/'.$meal->mealImages[0]->path)}}" alt="Product" />
                        							@endif
                        							<div class="product--hover">
                        								<div class="product--action">
                        									<button class="btn btn--primary btn--inverse" onclick="addToCart({{$meal->id}})">Add To Cart</button>
                        								</div>
                        							</div>
                        							<!-- .product-overlay end -->
                        						</div>
                        						<!-- .product-img end -->
                        						<div class="product--content">
                        							<div class="product--title">
                        								<h3><a href="#">{{$meal->name}}</a></h3>
                        							</div>
                        							<!-- .product-title end -->
                        							<div class="product--price">
                        								<span>{{$meal->price}} JD</span>
                        							</div>
                        							<!-- .product-price end -->
                        						</div>
                        						<!-- .product-bio end -->
                        					</div>
                        				</div>
                        				<!-- .dish-panel end --> 
                        			</div> <!-- .row end -->     
                        		</div><!-- .container end -->
                        	</div><!-- #menuSimple1 end -->
                        </div>
                        @endif
                        @endforeach
                        <!-- .tab-pane end -->
                        @foreach($meals as $meal)
                        @if($meal->category_id == 2)
                        <div class="tab-pane fade in active" id="lunch">
                        <!--lunch Menu
                        	============================================= -->
                        	<div class="menu-simple">
                        		<div class="container">
                        			<div class="row">
                        				<!-- Dish -->
                        				<div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts filter-soup">
                        					<div class="product-item">
                        						<div class="product--img">
                        							@if($meal->mealImages[0]->path)
                        							<img src="{{url('storage/uploads/'.$meal->mealImages[0]->path)}}" alt="Product" />
                        							@endif
                        							<div class="product--hover">
                        								<div class="product--action">
                        									<button class="btn btn--primary btn--inverse" onclick="addToCart({{$meal->id}})">Add To Cart</button>
                        								</div>
                        							</div>
                        							<!-- .product-overlay end -->
                        						</div>
                        						<!-- .product-img end -->
                        						<div class="product--content">
                        							<div class="product--title">
                        								<h3><a href="#">{{$meal->name}}</a></h3>
                        							</div>
                        							<!-- .product-title end -->
                        							<div class="product--price">
                        								<span>{{$meal->price}} JD</span>
                        							</div>
                        							<!-- .product-price end -->
                        						</div>
                        						<!-- .product-bio end -->
                        					</div>
                        				</div>
                        				<!-- .dish-panel end -->
                        			</div> <!-- .row end -->     
                        		</div><!-- .container end -->
                        	</div><!-- #menuSimple1 end -->                    
                        </div>
                        @endif
                        @endforeach
                        <!-- .tab-pane end -->  
                        <div class="tab-pane fade" id="dinner">
                        <!-- Menu
                        	============================================= -->
                        	<div class="menu-simple">
                        		<div class="container">
                        			<div class="row">
                        				<!-- Dish -->
                        				@foreach($meals as $meal)
                        				@if($meal->category_id == 3)
                        				<div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts filter-soup">
                        					<div class="product-item">
                        						<div class="product--img">
                        							@if($meal->mealImages[0]->path)
                        							<img src="{{url('storage/uploads/'.$meal->mealImages[0]->path)}}" alt="Product" />
                        							@endif
                        							<div class="product--hover">
                        								<div class="product--action">
                        									<button class="btn btn--primary btn--inverse" onclick="addToCart({{$meal->id}})">Add To Cart</button>
                        								</div>
                        							</div>
                        							<!-- .product-overlay end -->
                        						</div>
                        						<!-- .product-img end -->
                        						<div class="product--content">
                        							<div class="product--title">
                        								<h3><a href="#">{{$meal->name}}</a></h3>
                        							</div>
                        							<!-- .product-title end -->
                        							<div class="product--price">
                        								<span>{{$meal->price}} JD</span>
                        							</div>
                        							<!-- .product-price end -->
                        						</div>
                        						<!-- .product-bio end -->
                        					</div>
                        				</div>
                        				<!-- .dish-panel end --> 
                        			</div> <!-- .row end -->     
                        		</div><!-- .container end -->
                        	</div><!-- #menuSimple1 end -->                    
                        </div>
                        @endif
                        @endforeach
                        <!-- .tab-pane end -->
                        <div class="tab-pane fade" id="drinks">
                        <!-- Menu
                        	============================================= -->
                        	<div id="menuSimple2" class="menu-simple">
                        		<div class="container">
                        			<div class="row">
                        				<!-- Dish -->
                        				@foreach($meals as $meal)
                        				@if($meal->category_id == 4)
                        				<div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts filter-soup">
                        					<div class="product-item">
                        						<div class="product--img">
                        							@if($meal->mealImages[0]->path)
                        							<img src="{{url('storage/uploads/'.$meal->mealImages[0]->path)}}" alt="Product" />
                        							@endif
                        							<div class="product--hover">
                        								<div class="product--action">
                        									<button class="btn btn--primary btn--inverse" onclick="addToCart({{$meal->id}})">Add To Cart</button>
                        								</div>
                        							</div>
                        							<!-- .product-overlay end -->
                        						</div>
                        						<!-- .product-img end -->
                        						<div class="product--content">
                        							<div class="product--title">
                        								<h3><a href="#">{{$meal->name}}</a></h3>
                        							</div>
                        							<!-- .product-title end -->
                        							<div class="product--price">
                        								<span>{{$meal->price}} JD</span>
                        							</div>
                        							<!-- .product-price end -->
                        						</div>
                        						<!-- .product-bio end -->
                        					</div>
                        				</div>
                        				<!-- .dish-panel end -->
                        			</div> <!-- .row end -->     
                        		</div><!-- .container end -->
                        	</div><!-- #menuSimple1 end --> 
                        	@endif
                        	@endforeach                   
                        </div>
                        <!-- .tab-pane end -->
                    </div>
                    <!-- .tabs-content end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #menuSimple end -->

    @endsection

    @section('script')
    @endsection