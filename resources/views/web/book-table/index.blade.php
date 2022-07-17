@extends('web.layouts.master')
@section('title')
Home
@endsection

@section('header-title-1')
Reservation
@endsection

@section('header-title-2')
Book Your Table
@endsection

@section('header-title-3')

@endsection

@section('body')
<!-- Reservation #1
============================================= -->
<section id="reservation1" class="reservation bg-white pb-80 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="reservation-form mt-10 mb-10 text-center">
                    <div class="reservation--dec">
                        You can Book a table online easily in just a couple of minutes. We take reservations for lunch and dinner, just check the availability of your table & book it now!
                    </div>
                    <form method="post" action="{{url('/store')}}" class=" mb-0">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select required class="form-control" name="num_of_people" id="num">
									<option value="">Number of people</option>
                                    <option value="2">2 People</option>
									<option value="3">3 People</option>
									<option value="4">4 People</option>
									<option value="5">5 People</option>
									<option value="6">6 People</option>
									<option value="8">8 People</option>
									<option value="10">10 People</option>
								</select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select required class="form-control" name="date" id="day">
									<option value="">Date</option>
                                    <option value=" {{$now}}"> {{$now}}</option>
									<option value="{{$tomorrow}}">{{$tomorrow}}</option>
									<option value="{{$after_tomorrow}}">{{$after_tomorrow}}</option>
								</select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select required class="form-control" name="time" id="time">
									<option value="">Time</option>
                                    <option value="8:00">8:00 PM</option>
									<option value="9:00">9:00 PM</option>
									<option value="10:00">10:00 PM</option>
									<option value="11:00">11:00 PM</option>
									<option value="12:00">12:00 AM</option>
								</select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select required class="form-control" name="table_id" id="time">
                                    <option value="">Table</option>
                                    @foreach ($tables as $table)
                                    <option value="{{$table->table_number}}">{{$table->table_number}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select required  class="form-control" name="order_id" id="time">
                                    <option value="">Order</option>
                                    @foreach ($orders as $order)
                                    <option value="{{$order->id}}">{{$order->id}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" id="submit-reservation" class="btn btn--secondary btn--block">Submit</button>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <!--Alert Message-->
                                <div class="reservation-result"></div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </form>
                    <!-- form end -->
                </div>
                <!-- .contact-form end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #reservation1 end -->
@endsection

@section('script')
@endsection