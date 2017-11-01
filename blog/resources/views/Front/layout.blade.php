<?php
/**
 * Created by 高兴说理
 * User: 高兴
 * Date: 2017/9/22
 * Time: 14:59
 */
use Illuminate\Support\Facades\URL;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>_高兴博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link href="{{URL::asset('/Front')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{URL::asset('/Front')}}/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{URL::asset('/Front')}}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{URL::asset('/Front')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="main-container">
    <section class="page-title page-title-4 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">高兴博客</h3>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="index.html">首页</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    @yield('container')

    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="title">友情链接</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="http://www.junong18.com/">高兴</a>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub">&copy; Copyright 2017- 高兴说理</span>
                </div>
                <div class="col-sm-6 text-right">

                </div>
            </div>
        </div>
        <!--end of container-->
        <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
    </footer>
</div>
<script src="{{URL::asset('/Front')}}/js/jquery.min.js"></script>
<script src="{{URL::asset('/Front')}}/js/bootstrap.min.js"></script>

@yield('appendJs')
</body>
</html>
