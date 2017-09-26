
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SunshineTour</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php getUrlThemeActive()?>/admin/css/style.css" rel="stylesheet">
    <link href="<?php getUrlThemeActive()?>/admin/css/jquery-ui.css" rel="stylesheet">
    <link href="<?php getUrlThemeActive()?>/admin/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?php getUrlThemeActive()?>/admin/css/pikaday.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php getUrlThemeActive()?>/admin/js/menu.js"></script>
    <script src="<?php getUrlThemeActive()?>/admin/js/jquery-ui.js"></script>
    <script src="<?php getUrlThemeActive()?>/admin/js/range.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>/admin/js/jquery.leanModal.min.js"></script>
</head>
<body>
 <header>
    <div class="head_row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <div id="clock"></div>
                </div>
                <div class="col-sm-6 col-xs-12 head_list">
                    <ul class="list-inline">
                        <?php
                            session_start();
                            if(isset($_SESSION['customerInfo'])){
                             $customer = $_SESSION['customerInfo'];

                        ?>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>
                                    {{$customer['customer_name']}}
                                </a></li>
                            <li><a href="{{asset(route('logoutUser'))}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>

                            <?php
                            }else{?>
                        <li><a href="{{asset('login')}}"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Đăng nhập</a></li>
                        <li><a href="{{asset('register')}}"><i class="fa fa-key" aria-hidden="true"></i> Đăng ký</a></li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bg hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 logo">
                    <a href="{{asset('trangchu')}}"><img src="<?php getUrlThemeActive()?>admin/images/logo.png" alt="" class="img-responsive"/></a>
                </div>
            </div>
        </div>
    </div>
</header>
 <nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="filter_mobile visible-xs">
                    <span>Bộ lọc</span>
                </div>
                <div id='cssmenu'>
                    <ul>
                        <li class="active"><a href='{{asset('trangchu')}}'><img src="<?php getUrlThemeActive()?>admin/images/icon1.png"></a></li>

                    <?php
                        showCategories($placesOfMenu);
                        ?>

                        {{--<li><a href="{{asset('category')}}">Du lịch tự chọn</a></li>--}}
                        <li><a href="{{asset('requesHolel')}}">Yêu cầu báo giá</a></li>
                        <li><a href={{asset('contact')}}>Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
 <section class="mainbody">
     <div class="container">
         <div class="row">
