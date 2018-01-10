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
    <div class="result-show">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p><span class="primary-color"><strong>124</strong></span> Results so far </div>
                </p>
                <div class="col-sm-9">
                    <select class="custom-select pull-right">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- //results show -->
    <section class="restaurants-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
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
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo8.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo5.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo6.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo6.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo6.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo6.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo6.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                <div class="entry-logo">
                                    <a class="img-fluid" href="#"><img src="images/logo7.png" alt="Food logo"></a>
                                </div>
                                <!-- end:Logo -->
                                <div class="entry-dscr">
                                    <h5><a href="#">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ,urgers, American, Sandwiches <a href="#">...</a></span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min $ 10,00</li>
                                        <li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
                                    </ul>
                                </div>
                                <!-- end:Entry description -->
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                <div class="right-content bg-white">
                                    <div class="right-review">
                                        <div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                        <p> 245 Reviews</p> <a href="profile.html" class="btn theme-btn-dash">View Menu</a> </div>
                                </div>
                                <!-- end:right info -->
                            </div>
                        </div>
                        <!--end:row -->
                    </div>
                    <!-- end:Restaurant entry -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection