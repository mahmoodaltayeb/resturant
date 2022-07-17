@extends('web.layouts.master')
@section('title')
Home
@endsection

@section('header-title-1')
Welcome To Steak In
@endsection

@section('header-title-2')
We Are Food Masters!
@endsection

@section('body')
<!-- banner#5
============================================= -->
<section id="banner5" class="banner banner-2 text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading heading-1 text--center">
                    <p class="heading--subtitle">Hello dear</p>
                    <h2 class="heading--title">Welcome To Steak In</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Steak In was the first retaurant to open in Egypt, the resturant was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.</p>
                </div>
                <!-- .heading end -->
                <a class="btn btn--secondary btn--bordered btn--rounded mt-30" href="#">Book A Table</a>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img mt-20">
                    <img src="{{url('/')}}/web-theme/assets/images/banners/6.jpg" alt="image">
                </div>
                <div class="banner-img mt-20">
                    <img src="{{url('/')}}/web-theme/assets/images/banners/7.jpg" alt="image">
                </div>
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img">
                    <img src="{{url('/')}}/web-theme/assets/images/banners/9.jpg" alt="image">
                </div>
                <div class="banner-img mt-20">
                    <img src="{{url('/')}}/web-theme/assets/images/banners/10.jpg" alt="image">
                </div>
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #banner5 end -->
<div class="clearfix pt-150"></div>

@endsection

@section('script')
@endsection
