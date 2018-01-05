@extends('layouts.app')
@section('header')
    @include('components.header')
@endsection
@section('main')
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li>Login</li>
            </ul>
        </div>
    </div>
    <section class="contact-page inner-page">
        <div class="container">
            <div class="row">
                <!-- REGISTER -->
                <div class="col-md-8">
                    <div class="widget">
                        <div class="widget-body">
                            <form>
                                <div class="col-md-6">
                                    <div class="row"> 
                                        <div class="form-group col-sm-11 {{$errors->has('email')? 'has-error':''}}">
                                            @if($errors->has('email'))
                                                <div class="help-block">
                                                    {{$errors->first('email')}}
                                                </div>
                                            @endif
                                            <label for="exampleInputEmail1">Email</label>
                                            <input class="form-control" type="email" value="{{old('email')}}" placeholder="email" id="example-text-input">
                                        </div>
                                        <div class="form-group col-sm-11 {{$errors->has('password') ? 'has-error': ''}}">
                                            <label for="exampleInputPassword1"> Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p> <a href="#" class="btn theme-btn">Login</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group ">
                                            <div class="btn-group" data-toggle="buttons">
                                                <button class=" btn btn-outline-primary btn-block "><span ><i class="fa fa-facebook"></i></span> facebook </button>
                                                <button class="btn btn-primary btn-block"><span><i class="fa fa-twitter-square"></i> </span>twitter</button>
                                                <button class="btn theme-btn btn-block"><span class="fa fa-google-plus"></span>google+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Don't have an account?<a href="{{route('register')}}">Sign up </a></p>
                                <a href="{{route('password.request')}}">Forget Password ?</a>
                            </form>
                        </div>
                        <!-- end: Widget -->
                    </div>
                    <!-- /REGISTER -->
                </div>
                <!-- WHY? -->
                <div class="col-md-4">
                    <h4>Login to your account for fast, easy, and free.</h4>
                    <p>Once you"re Logged in, you can:</p>
                    <hr>
                    <img src="{{asset('shop/images/Local.png')}}" alt="" class="img-fluid">
                    <p></p>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                        </div>
                    </div>
                    <!-- end:panel -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                        </div>
                    </div>
                    <!-- end:Panel -->
                    <h4 class="m-t-20">Contact Customer Support</h4>
                    <p> If you"re looking for more help or have a question to ask, please </p>
                    <p> <a href="contact.html" class="btn theme-btn m-t-15">contact us</a> </p>
                </div>
                <!-- /WHY? -->
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('components.footer')
@endsection