@extends('web.layouts.master')
@section('title')
Home
@endsection

@section('header-title-1')

@endsection

@section('header-title-2')
reservations
@endsection

@section('header-title-3')

@endsection

@section('body')

<!-- Pricing #1
============================================= -->
<section id="pricing" class="pricing text-center bg-white">
    <div class="container">
        <div class="row clearfix">

            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->

        <div class="row">
            <!-- Pricing Packge #1
			============================================= -->
			@foreach ($reservations as $reservation)
            <div class="col-md-4 col-sm-4 col-xs-12 price-table">
                <div class="pricing-panel">
                    <!--  Pricing heading  -->

                    <!--  Pricing body  -->
                    <div class="pricing--body text--center">
                        <ul class="list-group">
                            <li class="list-group-item text-capitalize">Status : {{$reservation->status}}</li>
                            <li class="list-group-item text-capitalize">{{$reservation->order->user->first_name}}</li>
                            <li class="list-group-item text-capitalize">table number : {{$reservation->table->table_number}}</li>
                            <li class="list-group-item text-capitalize">{{$reservation->date}}</li>
                            <li class="list-group-item text-capitalize">Meals in order</li>
                            <li class="list-group-item text-capitalize">{{$reservation->order->orderMeals[0]->meal->name}}</li>
                        </ul>
                    </div>
                    <!--  .Pricing Body end -->
                    <!--  Packge Footer  -->
                    <div class="panel-footer">
                        <a class="btn btn--primary btn--block" href="#">Edit</a>
                    </div>
                </div>
            </div>
            <!-- Package End -->
        @endforeach
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<div class="cleafix mb-150"></div>

@endsection

@section('script')
@endsection
