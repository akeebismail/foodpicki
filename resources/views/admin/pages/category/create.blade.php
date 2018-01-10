@extends('layouts.admin')
@section('stylesheet')
    <link href="/assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/summernote/summernote.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    @endsection
@section('header')
    @include('admin.component.header')
@endsection

@section('sidebar')
    @include('admin.component.sidebar')
@endsection
@section('content')
    <div class="page-heading">
        <h1>Create Menu Category</h1>
    </div>
    <div class="row">
        <div class="col-sm-10 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Category</strong> Form</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="register" method="post" enctype="multipart/form-data" action="{{route('admin.category.store')}}">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('name')? 'has-error' : ''}}">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                            @if($errors->has('name'))
                                <div class="help-block">
                                    {{$errors->first('name')}}
                                </div>
                                @endif
                        </div>
                        <div class="form-group {{$errors->has('name')? 'has-error' : ''}}">
                            <label>Image</label>
                            <input type="file" class="form-control" name="cover">
                            @if($errors->has('cover'))
                                <div class="help-block">
                                    {{$errors->first('cover')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Details</label>
                            <textarea name="details" class="summernote"></textarea>
                            @if($errors->has('details'))
                                <div class="help-block">
                                    {{$errors->first('details')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('name')? 'has-error' : ''}}">
                            <label class="control-label">Description</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                            @if($errors->has('description'))
                                <div class="help-block">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jscripts')
    <script src="/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/libs/bootstrap-inputmask/inputmask.js"></script>
    <script src="/assets/libs/summernote/summernote.js"></script>
    <script src="/assets/js/pages/forms.js"></script>
@endsection