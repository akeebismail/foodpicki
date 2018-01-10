<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title') </title>

    <!-- Styles -->
    <link href="/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="/assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="/assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
    <link href="/assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="/assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="/assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- Extra CSS Libraries Start -->
@yield('stylesheet')
    <!-- Extra CSS Libraries End -->

    <link href="/assets/css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-left">
<!--modals to come here -->
<div id="wrapper">
    <div class="topbar">
        @yield('header')
    </div>
    <div class="left side-menu">
        @yield('sidebar')
    </div>
    <div class="content-page">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
<div class="md-overlay"></div>
<script>
    var resizefunc = [];
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/assets/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
<script src="/assets/libs/jquery-detectmobile/detect.js"></script>
<script src="/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
<script src="/assets/libs/ios7-switch/ios7.switch.js"></script>
<script src="/assets/libs/fastclick/fastclick.js"></script>
<script src="/assets/libs/jquery-blockui/jquery.blockUI.js"></script>
<script src="/assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
<script src="/assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="/assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
<script src="/assets/libs/nifty-modal/js/classie.js"></script>
<script src="/assets/libs/nifty-modal/js/modalEffects.js"></script>
<script src="/assets/libs/sortable/sortable.min.js"></script>
<script src="/assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
<script src="/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/assets/libs/bootstrap-select2/select2.min.js"></script>
<script src="/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets/libs/pace/pace.min.js"></script>
<script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/assets/libs/jquery-icheck/icheck.min.js"></script>

<!-- Demo Specific JS Libraries -->
<script src="/assets/libs/prettify/prettify.js"></script>

<script src="/assets/js/init.js"></script>
<!-- Page Specific JS Libraries -->
@yield('jscripts')
</body>
</html>