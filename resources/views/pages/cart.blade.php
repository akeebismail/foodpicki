@extends('layouts.app')
@section('header')
    @include('components.header')
@endsection
@section('main')
    @include('pages.direction')
    <div class="inner-page-hero bg-image" data-image-src="{{asset('shop/images/profile-banner.jpg')}}">
        <div class="container"> </div>
        <!-- end:Container -->
    </div>
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Shopping Cart </a></li>
            </ul>
        </div>
    </div>
    <div class="container m-t-30">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"></div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                <div class="menu-widget m-b-30">
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                            Food Cart <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                                <i class="fa fa-angle-right pull-right"></i>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                        </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="collapse in" id="1">
                        <div class="food-item white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food4.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                        <div class="food-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food5.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                        <div class="food-item white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food6.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                        <div class="food-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food7.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                    </div>
                    <!-- end:Collapse -->
                </div>
                <!-- end:Widget menu -->
                <div class="menu-widget" id="2">
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                            PAST Food Order <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                                <i class="fa fa-angle-right pull-right"></i>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                        </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="collapse in" id="popular2">
                        <div class="food-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food4.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                        <div class="food-item white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food5.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                        <div class="food-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food6.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->
                        <div class="food-item white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="images/food7.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">Veg Extravaganza</a></h6>
                                        <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">$ 19.99</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">&#43;</a> </div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:Food item -->

                    </div>

                    <!-- end:Collapse -->
                </div>
                <!-- end:Widget menu -->
                <!--/row -->
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-3">
                <div class="sidebar-wrap">
                    <div class="widget widget-cart">
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                Your Shopping Cart
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="order-row bg-white">
                            <div class="widget-body">
                                <div class="title-row">Pizza Quatro Stagione <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                        <select class="form-control b-r-0" id="exampleSelect1">
                                            <option>Size SM</option>
                                            <option>Size LG</option>
                                            <option>Size XL</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <input class="form-control" type="number" value="2" id="example-number-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-row">
                            <div class="widget-body">
                                <div class="title-row">Carlsberg Beer <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                        <select class="form-control b-r-0">
                                            <option>Size SM</option>
                                            <option>Size LG</option>
                                            <option>Size XL</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <input class="form-control" value="4" id="quant-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:Order row -->
                        <div class="widget-delivery clearfix">
                            <form>
                                <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                        <input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                        <input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                </div>
                            </form>
                        </div>
                        <div class="widget-body">
                            <div class="price-wrap text-xs-center">
                                <p>TOTAL</p>
                                <h3 class="value"><strong>$ 25,49</strong></h3>
                                <p>Free Shipping</p>
                                <button onclick="location.href='checkout.html'" type="button" class="btn theme-btn btn-lg">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('footer')
    @include('components.footer')
@endsection