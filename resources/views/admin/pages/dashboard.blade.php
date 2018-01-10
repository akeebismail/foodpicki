@extends('layouts.admin')
@section('stylesheet')
    <link href="/assets/libs/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/morrischart/morris.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-clock/clock.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-calendar/css/bic_calendar.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/jquery-weather/simpleweather.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    @endsection
@section('header')
    @include('admin.component.header')
@endsection

@section('sidebar')
    @include('admin.component.sidebar')
    @endsection
@section('content')
    hello content
@endsection
@section('jscript')
    <script src="/assets/libs/d3/d3.v3.js"></script>
    <script src="/assets/libs/rickshaw/rickshaw.min.js"></script>
    <script src="/assets/libs/raphael/raphael-min.js"></script>
    <script src="/assets/libs/morrischart/morris.min.js"></script>
    <script src="/assets/libs/jquery-knob/jquery.knob.js"></script>
    <script src="/assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/assets/libs/jquery-clock/clock.js"></script>
    <script src="/assets/libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
    <script src="/assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
    <script src="/assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
    <script src="/assets/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>
    <script src="/assets/js/apps/calculator.js"></script>
    <script src="/assets/js/apps/todo.js"></script>
    <script src="/assets/js/apps/notes.js"></script>
    <script src="/assets/js/pages/index.js"></script>
    @endsection
