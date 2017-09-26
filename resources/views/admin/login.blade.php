
<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php getUrlThemeActive()?>admin_asset/js/modernizr.js"></script>

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="<?php getUrlThemeActive()?>admin_asset/images/logo.png" height="54" alt="Hotel Admin" />
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Đăng nhập</h2>
            </div>
            <div class="panel-body">
                @if (count($errors) > 0 )
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('report'))
                    <div class="alert alert-success">
                        {{session('report')}}
                    </div>
                @endif
                <form action="" method="post">
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group mb-lg">
                        <label>Email</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="text" class="form-control input-lg" />
                            <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-left">Password</label>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg" />
                            <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class=" text-left">
                                <a href="pages-recover-password.html" class="pull-right">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="col-sm-8 text-right">
                            <button type="submit" class="btn btn-primary hidden-xs">Đăng nhập</button>
                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Đăng nhập</button>
                        </div>
                    </div>
                    <br/>
                 	{{--<span class="mt-lg mb-lg line-thru text-center text-uppercase">--}}
                                {{--<span>or</span>--}}
                        {{--</span>--}}

                        {{--<div class="mb-xs text-center">--}}
                                {{--<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>--}}
                                {{--<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>--}}
                        {{--</div> -->--}}

                    {{--<p class="text-center">Chưa có tài khoản? <a href="pages-signup.html">Đăng ký ngay!</a>--}}

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2015. All Rights Reserved.</p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="<?php getUrlThemeActive()?>admin_asset/js/jquery.js"></script>
<script src="<?php getUrlThemeActive()?>admin_asset/js/jquery.browser.mobile.js"></script>
<script src="<?php getUrlThemeActive()?>admin_asset/js/bootstrap.js"></script>
<script src="<?php getUrlThemeActive()?>admin_asset/js/nanoscroller.js"></script>
<script src="<?php getUrlThemeActive()?>admin_asset/js/bootstrap-datepicker.js"></script>
<script src="<?php getUrlThemeActive()?>admin_asset/js/magnific-popup.js"></script>
<script src="<?php getUrlThemeActive()?>admin_asset/js/jquery.placeholder.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php getUrlThemeActive()?>admin_asset/js/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php getUrlThemeActive()?>admin_asset/js/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php getUrlThemeActive()?>admin_asset/js/theme.init.js"></script>

</body>
</html>