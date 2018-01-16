@extends('layouts.app')
@section('header')
    @include('components.header')
@endsection
@section('main')
    @include('pages.direction')


    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Foodmenu</li>
            </ul>
        </div>
    </div>

    <section class="restaurants-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-6">
                        <!-- Each popular food item starts -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 food-item">
                        <div class="food-item-wrap">
                            <div class="figure-wrap bg-image" data-image-src="{{asset('shop/images/food1.jpg')}}">
                            </div>
                            <div class="content">
                                <h5><a href="#">{{$food->name}}</a></h5>
                                <div class="price-btn-block">
                                    <span class="price">${{$food->price}}</span>
                                    <a href="" class="btn theme-btn-dash pull-right"
                                       onclick="event.preventDefault(); document.getElementById('addToCart').submit()"
                                    >Order Now</a>

                                    <form action="{{route('cart.store')}}" method="post" id="addToCart" style="display: none">
                                        {{csrf_field()}}
                                        <input type="hidden" name="quantity" value="1"/>
                                        <input type="hidden" name="product" value="{{$food->id}}"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                    <div class="row m-t-30">
                        <div class="col-sm-12 col-xs-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false">
                                            Description
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                                    <div class="panel-body">
                                        {{$food->description}}
                                    </div>
                                </div>
                            </div>
                            <!--//panel-->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2">
                                            <i class="ti-info-alt"></i>
                                            Nutritional Information</a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="faq2">
                                    <div class="panel-body">
                                        {{$food->nutrition_info}}
                                    </div>
                                </div>
                            </div>
                            <!--//panel-->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq3">
                                            <i class="ti-info-alt"></i>Method of Preparation</a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="faq3">
                                    <div class="panel-body">
                                        {{$food->prep_methods}}
                                    </div>
                                </div>
                            </div>
                            <!--//panel-->
                            <!--//panel-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection