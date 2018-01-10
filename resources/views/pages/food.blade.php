@extends('layouts.app')
@section('header')
    @include('components.header')
@endsection
@section('main')
    @include('pages.direction')

    <!-- start: Inner page hero -->
    <section class="inner-page-hero bg-image" data-image-src="{{asset('shop/images/profile-banner.jpg')}}">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                        <div class="image-wrap">
                            <figure><img src="{{asset('shop/images/food1.jpg')}}" alt="Profile Image"></figure>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                        <div class="pull-left right-text white-txt">
                            <h6><a href="#">Fried Chicken with cheese</a></h6>
                            <a class="btn btn-small btn-green">Open</a>
                            <p>Burgers, American, Sandwiches, Fast Food, BBQ</p>
                            <ul class="nav nav-inline">
                                <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min $ 10,00</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-motorcycle"></i> 30 min</a> </li>
                                <li class="nav-item ratings">
                                    <a class="nav-link" href="#"> <span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:Inner page hero -->

    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Fried Chicken with cheese</li>
            </ul>
        </div>
    </div>

    <section class="restaurants-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                    <div class="sidebar clearfix m-b-20">
                        <div class="main-block">
                            <div class="sidebar-title white-txt">
                                <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                            <div class="input-group">
                                <input type="text" class="form-control search-field" placeholder="Search your favorite food"> <span class="input-group-btn">
                                 <button class="btn btn-secondary search-btn" type="button"><i class="fa fa-search"></i></button>
                                 </span> </div>
                            <form>
                                <ul>
                                    <li>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Barbecuing and Grilling</span> </label>
                                    </li>
                                    <li>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Appetizers</span> </label>
                                    </li>
                                    <li>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Soup and salads</span> </label>
                                    </li>
                                    <li>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Seafood</span> </label>
                                    </li>
                                    <li>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Beverages</span> </label>
                                    </li>
                                </ul>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end:Sidebar nav -->
                        <div class="widget-delivery">
                            <form>
                                <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                    <label class="custom-control custom-radio">
                                        <input id="radio2" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget clearfix">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                Price range
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <div class="range-slider m-b-10"> <span id="ex2CurrentSliderValLabel"> Filter by price:<span id="ex2SliderVal"><strong>35</strong></span>€</span>
                                <br>
                                <input id="ex2" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="35" /> </div>
                        </div>
                    </div>
                    <!-- end:Pricing widget -->
                    <div class="widget clearfix">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                Popular tags
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li> <a href="#" class="tag">
                                        Pizza
                                    </a> </li>
                                <li> <a href="#" class="tag">
                                        Sendwich
                                    </a> </li>
                                <li> <a href="#" class="tag">
                                        Sendwich
                                    </a> </li>
                                <li> <a href="#" class="tag">
                                        Fish
                                    </a> </li>
                                <li> <a href="#" class="tag">
                                        Desert
                                    </a> </li>
                                <li> <a href="#" class="tag">
                                        Salad
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end:Widget -->
                </div>
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                        <!-- Each popular food item starts -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                            <div class="food-item-wrap">
                                <div class="figure-wrap bg-image" data-image-src="{{asset('shop/images/food1.jpg')}}">
                                    <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                    <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                    <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                </div>
                                <div class="content">
                                    <h5><a href="#">The South"s Best Fried Chicken</a></h5>
                                    <div class="product-name">Fried Chicken with cheese</div>
                                    <div class="price-btn-block"> <span class="price">$ 15,99</span> <a href="" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                </div>
                                <div class="restaurant-block">
                                    <div class="left">
                                        <a class="pull-left" href="#"> <img src="{{asset('shop/images/logo1.png')}}" alt="Restaurant logo"> </a>
                                        <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Each popular food item starts -->
                        <!-- Each popular food item starts -->


                    <!-- end:right row -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection