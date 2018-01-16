@extends('layouts.app')
@section('header')
    @include('components.header')
@endsection
@section('main')
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li>Registration</li>

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
                            <form action="{{route('register')}}" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-sm-10  {{$errors->has('name')? 'has-error': ''}}">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input class="form-control has-error" type="text" name="name" value="{{old('name')}}" >
                                        @if($errors->has('name'))
                                            <div class="help-block">
                                                {{$errors->first('name')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6 {{$errors->has('email')? 'has-error' :''}}">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small>
                                        @if($errors->has('email'))
                                            <div class="help-block">
                                                {{$errors->first('email')}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-6 {{$errors->has('phone')? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Phone number</label>
                                        <input class="form-control" name="phone" type="tel" value="{{old('phone')}}" id="example-tel-input-3"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small>
                                        @if($errors->has('phone'))
                                            <div class="help-block">
                                                {{$errors->first('phone')}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-6 {{$errors->has('password')? 'has-error' : ''}}">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        @if($errors->has('password'))
                                            <div class="help-block">
                                                {{$errors->first('password')}}
                                            </div>
                                        @endif

                                    </div>
                                    <div class="form-group col-sm-6 {{$errors->has('confirmed')}}">
                                        <label for="exampleInputPassword1">Repeat password</label>
                                        <input type="password"  name="confirmed" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                        @if($errors->has('confirm_password'))
                                            <div class="help-block">
                                                {{$errors->first('confirmed')}}
                                            </div>
                                            @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p> <button type="submit" class="btn theme-btn">Register</button> </p>
                                    </div>

                                </div>
                                <a href="{{route('login')}}">Already have an account?</a>
                                <a href="{{route('password.request')}}">Forget Password ?</a>
                            </form>
                        </div>
                        <!-- end: Widget -->
                    </div>
                    <!-- /REGISTER -->
                </div>
                <!-- WHY? -->
                <div class="col-md-4">
                    <h4>Registration is fast, easy, and free.</h4>
                    <p>Once you"re registered, you can:</p>
                    <hr>
                    <img src="images/Local.png" alt="" class="img-fluid">
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
