<?php

use Illuminate\Support\Facades\URL;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理中心_博客</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="{{URL::asset('/Back')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{URL::asset('/Back')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{URL::asset('/Back')}}/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{URL::asset('/Back')}}/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">

@include('Back.header')

<div class="wrapper row-offcanvas row-offcanvas-left">

    @include('Back.left')

    @yield('right')

</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="{{URL::asset('/Back')}}/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('/Back')}}/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('/Back')}}/js/app.js" type="text/javascript"></script>

</body>
</html>
