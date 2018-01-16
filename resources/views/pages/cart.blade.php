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
                        <?php $i = 0; ?>
                        @foreach($foods as $food)
                        <div class="food-item {{ ($i % 2 == 0) ? 'white' :'' }}">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6 col-lg-6 col-md-6">
                                    <div class="rest-logo pull-left">
                                        <a class="restaurant-logo pull-left" href="#"><img src="{{asset('shop/images/food4.jpg')}}" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                        <h6><a href="#">{{$food->product->name}}</a></h6>
                                        <p> ${{$food->product->price}}</p>
                                    </div>
                                    <!-- end:Description -->
                                </div>
                                <div class="col-sm-2 col-xs-4 col-lg-2 col-md-2">
                                    <form class="form-group" action="{{route('cart.update',$food->rowId)}}" method="post">
                                        {{csrf_field()}} {{method_field('PUT')}}
                                        <div class="rows">
                                            <input type="text"  style="width: 75px;" class="" name="quantity" value="{{$food->qty}}">
                                            <button type="submit"  class="btn btn-small btn-secondary">Add</button>

                                        </div>
                                    </form>
                                </div>
                                <!-- end:col -->
                                <div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 pull-right item-cart-info">
                                    <form action="{{route('cart.destroy', $food->rowId)}}" method="post">
                                        {{csrf_field()}} {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal"><i class="fa fa-trash"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!-- end:row -->
                        </div>
                            <?php $i++; ?>
                        @endforeach
                        <!-- end:Food item -->
                    </div>
                    <!-- end:Collapse -->
                </div>
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
                                <p>Subtotal</p>
                                <h4 class="value">$ {{$subtotal}}</h4>
                                <p>Free Shipping</p>

                                <p>Total</p>
                                <h5 class="value"><strong>$ {{$total}}</strong></h5>
                                <button  type="button" class="btn theme-btn btn-lg">Checkout</button>
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