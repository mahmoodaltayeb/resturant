<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
        ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--IE Compatibility Meta-->
        <meta name="base_url" content="{{url('/')}}">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="zytheme" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Elegant Restaurant & Cafe Html5 Template by zytheme">
        <link href="{{url('/')}}/web-theme/assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
        ============================================= -->
        <link href='http://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,700,900%7CRuthie%7CAbril+Fatface' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
        ============================================= -->
        <link href="{{url('/')}}/web-theme/assets/css/external.css" rel="stylesheet">
        <link href="{{url('/')}}/web-theme/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{url('/')}}/web-theme/assets/css/style.css" rel="stylesheet">
        

        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/assets/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/assets/revolution/css/navigation.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
  <![endif]-->

    <!-- Document Title
        ============================================= -->
        <title>@yield('title')</title>
    </head>

    <body>
     <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- Document Wrapper
     ============================================= -->
     <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.html">
                         <img class="logo-light" src="{{url('/')}}/web-theme/assets/images/logo/logo-light.png" alt="Steakin Logo" draggable="false">
                         <img class="logo-dark" src="{{url('/')}}/web-theme/assets/images/logo/logo-dark.png" alt="Steakin Logo" draggable="false">
                     </a>
                 </div>

                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right navbar-left m-right">
                        <!-- Home Menu -->
                        <li class="has-dropdown mega-dropdown ">
                            <a href="{{(url('/home'))}}"  class="dropdown-toggle menu-item">home</a>

                            <!-- .mega-dropdown-menu end -->
                        </li>
                        <!-- li end -->



                        <!-- offers Menu -->
                        <li class="has-dropdown">
                            <a href="{{url('/menu')}}"  class="dropdown-toggle  menu-item" data-hover="pages">Menu</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="menu-board.html">Breakfast</a>
                                </li>
                                <li>
                                    <a href="menu-classic.html">Lunch</a>
                                </li>
                                <li>
                                    <a href="menu-gallery.html">Dinner</a>
                                </li>
                                <li>
                                    <a href="menu-grid.html">Drinks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->

                        <li>
                            <a class="menu-item" href="{{url('/web-reservation')}}">book table</a>
                        </li>

                        <!-- tables Menu-->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">TABLES</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">revolution sliders</a>
                                    <ul class="dropdown-menu">
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sliders 1</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="slider-1.html">slider 1</a>
                                                </li>
                                                <li>
                                                    <a href="slider-2.html">slider 2</a>
                                                </li>
                                                <li>
                                                    <a href="slider-3.html">slider 3</a>
                                                </li>
                                                <li>
                                                    <a href="slider-4.html">slider 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sliders 2</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="slider-5.html">slider 5</a>
                                                </li>
                                                <li>
                                                    <a href="slider-6.html">slider 6</a>
                                                </li>
                                                <li>
                                                    <a href="slider-9.html">slider 7</a>
                                                </li>
                                                <li>
                                                    <a href="slider-9.html">slider 8</a>
                                                </li>
                                                <li>
                                                    <a href="slider-9.html">slider 9</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Headers</a>
                                    <ul class="dropdown-menu">
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">transparent</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="header-2.html">transparent 2</a>
                                                </li>
                                                <li>
                                                    <a href="header-3.html">transparent 3</a>
                                                </li>
                                                <li>
                                                    <a href="header-5.html">transparent 5</a>
                                                </li>
                                                <li>
                                                    <a href="header-6.html">transparent 6</a>
                                                </li>
                                                <li>
                                                    <a href="header-10.html">transparent 7</a>
                                                </li>
                                                <li>
                                                    <a href="header-11.html">transparent 8</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">centered</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="header-10.html">centered 1</a>
                                                </li>
                                                <li>
                                                    <a href="header-4.html">centered 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">with topbar</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="header-7.html">topbar 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">fixed top</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="header-1.html">fixed 1</a>
                                                </li>
                                                <li>
                                                    <a href="header-2.html">fixed 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">bordered</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="header-8.html">bordered 8</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Footers</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="footer-1.html#footer">Footer 1</a>
                                        </li>
                                        <li>
                                            <a href="footer-2.html#footer">Footer 2</a>
                                        </li>
                                        <li>
                                            <a href="footer-3.html#footer">Footer 3</a>
                                        </li>
                                        <li>
                                            <a href="footer-4.html#footer">Footer 4</a>
                                        </li>
                                        <li>
                                            <a href="footer-5.html#footer">Footer 5</a>
                                        </li>
                                        <li>
                                            <a href="footer-6.html#footer">Footer 6</a>
                                        </li>
                                        <li>
                                            <a href="footer-7.html#footer">Footer 7</a>
                                        </li>
                                        <li>
                                            <a href="footer-8.html#footer">Footer 8</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">page titels</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="page-title-1.html">page title 1</a>
                                        </li>
                                        <li>
                                            <a href="page-title-2.html">page title 2</a>
                                        </li>
                                        <li>
                                            <a href="page-title-3.html">page title 3</a>
                                        </li>
                                        <li>
                                            <a href="page-title-4.html">page title 4</a>
                                        </li>
                                        <li>
                                            <a href="page-title-5.html">page title 5</a>
                                        </li>
                                        <li>
                                            <a href="page-title-6.html">page title 6</a>
                                        </li>
                                        <li>
                                            <a href="page-title-7.html">page title 7</a>
                                        </li>
                                        <li>
                                            <a href="page-title-8.html">page title 8</a>
                                        </li>
                                        <li>
                                            <a href="page-title-9.html">page title 9</a>
                                        </li>
                                        <li>
                                            <a href="page-title-10.html">page title 10</a>
                                        </li>
                                        <li>
                                            <a href="page-title-11.html">page title 11</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">widgets</a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="elements-widgets.html">flickr stream</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">search</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">last tweets</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">Filter</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">recent posts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="elements-widgets.html">Advertisement</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">Recent Items</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">tag clouds</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">categories</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">untility pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="page-404.html">page 404</a>
                                        </li>
                                        <li>
                                            <a href="page-soon.html">coming soon</a>
                                        </li>
                                        <li>
                                            <a href="page-maintenance.html">maintenance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">page tempalates</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="page-layout-fullwidth.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="page-layout-fullwidth-wide.html">fullwidth wide</a>
                                        </li>
                                        <li>
                                            <a href="page-layout-sidebar-right.html">right sidebar</a>
                                        </li>
                                        <li>
                                            <a href="page-layout-sidebar-left.html">left sidebar</a>
                                        </li>

                                        <li>
                                            <a href="page-layout-blank.html">blank page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="landing.html">landing page</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->





                        <!-- Elements Menu -->
                        <li class="has-dropdown mega-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">elements</a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <!-- Column #1 -->
                                            <div class="col-md-3">
                                                <a href="#">interactive elements</a>
                                                <ul>
                                                    <li>
                                                        <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>testimonials</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-blockquotes.html"><i class="fa fa-quote-left"></i>blockquotes</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-video-buttons.html"><i class="fa fa-toggle-right"></i>video buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-clients.html"><i class="fa fa-user"></i>clients</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-clients-carousel.html"><i class="fa fa-users"></i>clients carousel</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-daily-specials.html"><i class="fa fa-newspaper-o"></i>Daily Specials</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->

                                            <!-- Column #2 -->
                                            <div class="col-md-3">
                                                <a href="#">standard elements</a>
                                                <ul>
                                                    <li>
                                                        <a href="elements-accordion.html"><i class="fa fa-server"></i>accordion</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-cta.html"><i class="fa fa-child"></i>call to action</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-contact-form.html"><i class="fa fa-desktop"></i>contact form</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-team.html"><i class="fa fa-group"></i>team variations</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-tabs.html"><i class="fa fa-ellipsis-h"></i>tabs</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-reservation.html"><i class="fa fa-laptop"></i>reservation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->

                                            <!-- Column #3 -->
                                            <div class="col-md-3">
                                                <a href="#">infographics elements</a>
                                                <ul>
                                                    <li>
                                                        <a href="elements-counters.html"><i class="fa fa-dashboard"></i>counters</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-dividers.html"><i class="fa fa-dot-circle-o"></i>dividers</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-pricing.html"><i class="fa fa-exchange"></i>pricing</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-list.html"><i class="fa fa-list"></i>list</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-progress-bars.html"><i class="fa fa-hourglass-half"></i>progress bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="elements-interactive-banners.html"><i class="fa fa-laptop"></i>interactive banners</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->

                                            <!-- Column #4 -->
                                            <div class="col-md-3">
                                                <a href="#">typography</a>
                                                <ul>
                                                   <li>
                                                    <a href="elements-buttons.html"><i class="fa fa-suitcase"></i>buttons</a>
                                                </li>
                                                <li>
                                                    <a href="elements-heading.html"><i class="fa fa-sort-alpha-asc"></i>heading</a>
                                                </li>
                                                <li>
                                                    <a href="elements-columns-grids.html"><i class="fa fa-th"></i>columns grids</a>
                                                </li>
                                                <li>
                                                    <a href="elements-icon-text.html"><i class="fa fa-sliders"></i>icon text</a>
                                                </li>

                                                <li>
                                                    <a href="elements-typography.html"><i class="fa fa-text-height"></i>typography</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .col-md-3 end -->
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- container end -->
                            </li>
                        </ul>
                        <!-- .mega-dropdown-menu end -->
                    </li>
                </ul>
                <!-- Module Reservation  -->
                <div class="module module-reservation pull-left">
                    <!-- <a class="btn-popup btn-popup-theme" data-toggle="modal" data-target="#reservationModule">Book A Table</a> -->
                    @auth
                    <a class="btn-popup btn-popup-theme" href="{{url('web/logout')}}" data-target="#reservationModule">logout</a>
                    @endauth
                    @guest
                    <a class="btn-popup btn-popup-theme" href="{{url('web/login')}}" data-target="#reservationModule">signin</a>
                    @endguest
                    <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationModule">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                    <div class="row reservation reservation-1">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="reservation-form mb-30 text-center">
                                                <div class="reservation-bordered">
                                                    <div class="heading heading-1 text-center">
                                                        <p class="heading--subtitle">Reservation</p>
                                                        <h2 class="heading--title">Book Your Table</h2>
                                                        <div class="divider--shape-4"></div>
                                                    </div>
                                                    <div class="reservation--dec">
                                                        You can Book a table online easily in just a couple of minutes. We take reservations for lunch and dinner, just check the availability of your table & book it now!
                                                    </div>
                                                    <form method="post" action="{{url('/')}}/web-theme/assets/php/reservationpopup.php" class="reservationPopupForm mb-0">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <div class="form-select">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    <select class="form-control" name="people" id="numPopup" required>
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
                                                                <select class="form-control" name="day" id="dayPopup" required>
                                                                  <option value="">Date</option>
                                                                  <option value="november 23">November 23, 2018</option>
                                                                  <option value="november 24">November 24, 2018</option>
                                                                  <option value="november 25">November 25, 2018</option>
                                                                  <option value="november 26">November 26, 2018</option>
                                                                  <option value="november 27">November 27, 2018</option>
                                                              </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-12 col-md-4">
                                                        <div class="form-select">
                                                            <i class="fa fa-angle-down"></i>
                                                            <select class="form-control" name="time" id="timePopup" required>
                                                              <option value="">Time</option>
                                                              <option value="8:00">8:00 PM</option>
                                                              <option value="9:00">9:00 PM</option>
                                                              <option value="10:00">10:00 PM</option>
                                                              <option value="11:00">11:00 PM</option>
                                                              <option value="12:00">12:00 AM</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <button type="submit" id="submit-message" class="btn btn--secondary btn--block">Find Table</button>
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
                                </div>
                                <!-- .contact-form end -->
                            </div>
                            <!-- .col-md-8 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="text-uppercase text-center">
                                    <strong><span class="text-white">Reservation Powered by</span> <a href="#">Opentable</a></strong>
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- Module Cart -->
    <div id="mydiv" class="module module-cart pull-left">
        <div class="module-icon cart-icon">
            <i class="fa fa-shopping-cart"></i>
            <span  class="title">shop cart</span>
            @if(Session::has('cart'))
            <label id="shopcart" class="module-label">{{count(session('cart'))}}</label>
            @else
            <label id="shopcart" class="module-label">0</label>
            @endif
        </div>
        <div class="module-content module-box cart-box">
            <div class="cart-overview">
                @if(Session::has('cart'))
                @foreach(session('cart') as $meal)
                <ul id="mealdata" class="list-unstyled">
                <li>
                <img class="img-responsive" src="" alt="product" />
                <div id="mealsdata" class="product-meta">
                <h5 id="mealname" class="product-title">{{$meal['name']}}</h5>
                <p class="product-price"> {{$meal['price']}} JD</p>
                </div>
                <a class="cart-cancel" href="#">cancel</a>
                </li>
                </ul>
                @endforeach
                @endif
            </div>
            <div class="cart-total">
                <div class="total-desc">
                    Subtotal:
                </div>
                <div class="total-price">
                    0 JD
                </div> 
            </div>
            <div class="clearfix">
            </div>
            <div class="cart--control">
                <a class="btn btn--primary btn--block btn--rounded mb-10" href="{{url('/cart')}}">view cart</a>
                <a class="btn btn--primary btn--block btn--rounded mb-10" href="{{url('/clear')}}">clear</a>
            </div>
        </div>
    </div>
    <!-- .module-cart end -->
    <!-- Module Search -->
    <div class="module module-search pull-left">
        <div class="module-icon search-icon">
            <i class="fa fa-search"></i>
            <span class="title">search</span>
        </div>
        <div class="module-content module-fullscreen module--search-box">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                            <form class="form-search">
                                <input type="text" class="form-control" placeholder="Type Search Words Then Enter">
                                <button class="btn" type="button"><i class="fa fa-search"></i></button>
                            </form>
                            <!-- .form-search end -->
                        </div>
                        <!-- .col-md-8 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <!-- .module-search end -->
    <!-- Module Side NAV -->
    <div class="module module-side-nav pull-left">
        <div class="module-icon side-nav-icon">
            <i class="fa fa-bars"></i>
            <span class="title">Side Navigation</span>
        </div>
        <div class="module-content module-hamburger">
            <div class="hamburger-panel module-widgets">






    <!-- Tag Clouds
        ============================================= -->
        @auth
        <div class="widget widget-tags">
            <div class="widget--title">
                <h5>{{auth()->user()->first_name .' '. auth()->user()->last_name}}</h5>
                <a href="{{url('orders')}}">my orders</a>
                <br>
                <a href="{{url('user-reservations')}}">my reservations</a>
                <br>
                <a href="">account</a>
                <br>
                <a href="">logout</a>

            </div>
            <div class="widget--content">

            </div>
            @endauth
            <!-- .widget-tags end -->
            <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
        </div>
    </div>
</div>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
</header>
<!-- Page Title #1
    ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="{{url('/')}}/web-theme/assets/images/page-title/header-background.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text-center header-padding">
                     <div class="title--content">
                        <div class="title--subtitle">@yield('header-title-1')</div>
                        <div class="title--heading">
                            <h1>@yield('header-title-2')</h1>
                        </div>
                    </div>
                    <div class="clearfix color-white">
                        @yield('header-title-3')
                    </div>
                    <div class="divider--shape-1down"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

@yield('body')
<!-- footer#1
    ============================================= -->
    <footer id="footer" class="footer footer-1 text-center">
        <div class="divider--shape-dark"></div>
    <!-- Widget Section
     ============================================= -->
     <div class="footer--widget text--center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Follow Us</h3>
                        <div class="footer--social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                        </div>
                        <!-- .social-icons end -->
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <img class="mb-20" src="{{url('/')}}/web-theme/assets/images/logo/logo-light.png" alt="logo">
                        <p>Steak In has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar.</p>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Neswletter</h3>
                        <div class="widget--newsletter">
                            <form class="footer--social-newsletter mailchimp">
                                <input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
                                <button type="submit">join</button>
                            </form>
                            <div class="subscribe-alert"></div>
                        </div>
                        <!-- .widget end -->
                    </div>
                </div>
                <!-- .col-md-3 end -->
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!-- Copyrights
     ============================================= -->
     <div class="footer--copyright text-center">
        <div class="divider--shape-dark2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="contact-info">
                        <span>22 Alnahas Building, Tanta, Egypt</span> -
                        <span>02 01065370701</span> -
                        <span>7oroof@7oroof.com</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <span>&copy; 2017 Steak In, With Love by </span> <a href="http://themeforest.net/user/7oroof/portfolio?ref=zytheme">7oroof.com</a>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
    ============================================= -->
    <script src="{{url('/')}}/web-theme/assets/ajax/ajax.js"></script>
    <script src="{{url('/')}}/web-theme/assets/js/jquery-2.2.4.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/js/plugins.js"></script>
    <script src="{{url('/')}}/web-theme/assets/js/functions.js"></script>
    <!-- RS5.0 Core JS Files -->
    <script src="{{url('/')}}/web-theme/assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{url('/')}}/web-theme/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <!-- RS Configration JS Files -->
    <script src="{{url('/')}}/web-theme/assets/js/rsconfig.js"></script>
    @yield('script')
    <script >
        //get base url
        var base_url = $('meta[name="base_url"]').attr('content');
        var csrf_token = $('meta[name="csrf_token"]').attr('content');
</script>

</body>

</html>
