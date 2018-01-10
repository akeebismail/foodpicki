@extends('layouts.app')
@section('header')
    @include('components.header')
@endsection
@section('banner')
    @include('components.banner')
@endsection
@section('main')
    <!-- Popular block starts -->
    <section class="popular">
        <div class="container">
            <div class="title text-xs-center m-b-30">
                <h2>Popular This Month In Your City</h2>
                <p class="lead">The easiest way to your favourite food</p>
            </div>
            <div class="row">
                <!-- Each popular food item starts -->
                <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                    <div class="food-item-wrap">
                        <div class="figure-wrap bg-image" data-image-src="images/food1.jpg">
                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                        </div>
                        <div class="content">
                            <h5><a href="">The South"s Best Fried Chicken</a></h5>
                            <div class="product-name">Fried Chicken with cheese</div>
                            <div class="price-btn-block"> <span class="price">$ 15,99</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                        </div>
                        <div class="restaurant-block">
                            <div class="left">
                                <a class="pull-left" href=""> <img src="{{asset('shop/images/logo1.png')}}" alt="Restaurant logo" /> </a>
                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                            </div>
                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                        </div>
                    </div>
                </div>
                <!-- Each popular food item starts -->
                <!-- Each popular food item starts -->
                <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                    <div class="food-item-wrap">
                        <div class="figure-wrap bg-image" data-image-src="images/food2.jpg">
                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                        </div>
                        <div class="content">
                            <h5><a href="{{asset('shop/images/logo1.png')}}">The South"s Best Fried Chicken</a></h5>
                            <div class="product-name">Fried Chicken with cheese</div>
                            <div class="price-btn-block"> <span class="price">$ 18,49</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                        </div>
                        <div class="restaurant-block">
                            <div class="left">
                                <a class="pull-left" href=""> <img src="{{asset('shop/images/logo2.png')}}" alt="Restaurant logo" /> </a>
                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                            </div>
                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                        </div>
                    </div>
                </div>
                <!-- Each popular food item starts -->
                <!-- Each popular food item starts -->
                <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                    <div class="food-item-wrap">
                        <div class="figure-wrap bg-image" data-image-src="images/food3.jpg">
                            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                        </div>
                        <div class="content">
                            <h5><a href="">The South"s Best Fried Chicken</a></h5>
                            <div class="product-name">Fried Chicken with cheese</div>
                            <div class="price-btn-block"> <span class="price">$ 21,19</span> <a href="#" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                        </div>
                        <div class="restaurant-block">
                            <div class="left">
                                <a class="pull-left" href="profile.html"> <img src="{{asset('shop/images/logo3.png')}}" alt="Restaurant logo" /> </a>
                                <div class="pull-left right-text"> <a href="#">Chicken Restaurant</a> <span>68 5th Avenue New York</span> </div>
                            </div>
                            <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                        </div>
                    </div>
                </div>
                <!-- Each popular food item starts -->
            </div>
        </div>
    </section>
    <!-- Popular block ends -->
    @include('components.help')
    <!-- Featured restaurants starts -->
    <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4>Featured restaurants</h4> </div>
                </div>
                <div class="col-sm-8">
                    <!-- restaurants filter nav starts -->
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="selected" data-filter="*">Grill</a> </li>
                                <li><a href="#" data-filter=".pizza">Pizza</a> </li>
                                <li><a href="#" data-filter=".pasta">Pasta</a> </li>
                                <li><a href="#" data-filter=".thaifood">thai food</a> </li>
                                <li><a href="#" data-filter=".fish">fish</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- restaurants filter nav ends -->
                </div>
            </div>
            <!-- restaurants listing starts -->
            <div class="row">
                <div class="restaurant-listing">
                    <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant grill fish thaifood pizza">
                        <div class="restaurant-wrap">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                    <a class="restaurant-logo" href="#"> <img src="images/big-logo7.jpg" alt="Restaurant logo"> </a>
                                </div>
                                <!--end:col -->
                                <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                    <h5><a href="profile.html">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ</span>
                                    <div class="bottom-part">
                                        <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                        <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                        <div class="ratings"> <span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span> (122) </div>
                                    </div>
                                </div>
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!--end:Restaurant wrap -->
                    </div>
                    <!--end: col -->,
                    <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant grill fish pasta thaifood">
                        <div class="restaurant-wrap">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                    <a class="restaurant-logo" href="#"> <img src="images/logo-plate.png" alt="Restaurant logo"> </a>
                                </div>
                                <!--end:col -->
                                <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                    <,,,,,h5><a href="profile.html">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ</span>
                                    <div class="bottom-part">
                                        <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                        <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                        <div class="ratings"> <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span> (122) </div>
                                    </div>
                                </div>
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!--end:Restaurant wrap -->
                    </div>
                    <!--end: col -->
                    <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant grill thaifood pasta pizza">
                        <div class="restaurant-wrap">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                    <a class="restaurant-logo" href="#"> <img src="images/big-logo8.png" alt="Restaurant logo"> </a>
                                </div>
                                <!--end:col -->
                                <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                    <h5><a href="profile.html">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ</span>
                                    <div class="bottom-part">
                                        <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                        <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                        <div class="ratings"> <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span> (122) </div>
                                    </div>
                                </div>
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!--end:Restaurant wrap -->
                    </div>
                    <!--end: col -->
                    <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant thaifood fish pasta">
                        <div class="restaurant-wrap">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                    <a class="restaurant-logo" href="#"> <img src="images/big-logo4.png" alt="Restaurant logo"> </a>
                                </div>
                                <!--end:col -->
                                <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                    <h5><a href="profile.html">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ</span>
                                    <div class="bottom-part">
                                        <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                        <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                        <div class="ratings"> <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span> (122) </div>
                                    </div>
                                </div>
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!--end:Restaurant wrap -->
                    </div>
                    <!--end: col -->
                    <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant grill fish thaifood pasta pizza">
                        <div class="restaurant-wrap">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                    <a class="restaurant-logo" href="#"> <img src="images/big-logo3.png" alt="Restaurant logo"> </a>
                                </div>
                                <!--end:col -->
                                <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                    <h5><a href="profile.html">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ</span>
                                    <div class="bottom-part">
                                        <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                        <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                        <div class="ratings"> <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span> (122) </div>
                                    </div>
                                </div>
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!--end:Restaurant wrap -->
                    </div>
                    <!--end: col -->
                    <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant grill pasta pizza">
                        <div class="restaurant-wrap">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                    <a class="restaurant-logo" href="#"> <img src="images/big-logo2.png" alt="Restaurant logo"> </a>
                                </div>
                                <!--end:col -->
                                <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                    <h5><a href="profile.html">Maenaam Thai Restaurant</a></h5> <span>Burgers, American, Sandwiches, Fast Food, BBQ</span>
                                    <div class="bottom-part">
                                        <div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
                                        <div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
                                        <div class="ratings"> <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span> (122) </div>
                                    </div>
                                </div>
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!--end:Restaurant wrap -->
                    </div>
                    <!--end: col -->
                </div>
            </div>
            <!-- restaurants listing ends -->
            <!-- add restaurant starts -->
            <section class="add-restaurants">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 add-title">
                            <h4>Add Your Restaurant</h4> </div>
                        <div class="col-xs-12 col-sm-5 join-text">
                            <p>Join the thousands of other restaurants who benefit from having their menus on <a href="#"><strong> FoodPicky directory</strong></a> </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 join-btn text-xs-right"><a href="#" class="btn theme-btn btn-lg">I‘m restaurant</a> </div>
                    </div>
                </div>
            </section>
            <!-- add restaurant ends -->
        </div>
    </section>
    <!-- Featured restaurants ends -->
@endsection

@section('footer')
    @include('components.footer')
@endsection
