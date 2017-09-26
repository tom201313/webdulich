<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Trang chủ | Admin</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/magnific-popup.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/datepicker3.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/select2.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/datatables.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/bootstrap-colorpicker.css"/>
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/bootstrap-timepicker.css" />
        


        <!-- Upload file -->
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/bootstrap-fileupload.min.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/morris.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php getUrlThemeActive()?>admin_asset/css/theme-custom.css">

        <!-- Head Libs -->
        <script src="<?php getUrlThemeActive()?>admin_asset/js/modernizr.js"></script>
        
        <!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        -->
        <script src="<?php getUrlThemeActive()?>admin_asset/js/jquery.js"></script>

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="<?php getUrlThemeActive()?>admin_asset/images/logo.png" height="35" alt="Hotel admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <!-- start: search & user box -->
                <div class="header-right">
                    <form class="selecthotel nav-form">
                        {{--<div class="form-group">--}}
                            {{--<select id="selecthotel" class="form-control" required>--}}
                                {{--<option value="">--Chọn khách sạn--</option>--}}
                                {{--<option value="">Khách sạn A</option>--}}
                                {{--<option value="">Khách sạn B</option>--}}
                                {{--<option value="">Khách sạn C</option>--}}
                                {{--<option value="">Khách sạn D</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</form>--}}

                    <span class="separator"></span>

                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

                    <span class="separator"></span>

                    <ul class="notifications">
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="badge">3</span>
                            </a>

                            <div class="dropdown-menu notification-menu large">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Công việc
                                </div>

                                <div class="content">
                                    <ul>
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Đàn ca sáo nhị</span>
                                                <span class="message pull-right text-dark">60%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </li>

                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Luyện công</span>
                                                <span class="message pull-right text-dark">98%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                            </div>
                                        </li>

                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Làm vườn</span>
                                                <span class="message pull-right text-dark">33%</span>
                                            </p>
                                            <div class="progress progress-xs light mb-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge">4</span>
                            </a>

                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">230</span>
                                    Tin nhắn
                                </div>

                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="http://www2.vietbao.vn/images/vn45/van-hoa/45162494-luu-diec-phi-2.jpg" alt="Cô cô" class="img-circle" />
                                                </figure>
                                                <span class="title">Tiểu Long Nữ</span>
                                                <span class="message">Quá Nhi đang làm gì vậy?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2013_12_10/hoangdungquachtinh1.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Quách Bá Bá</span>
                                                <span class="message truncate">Quá Nhi đang lưu lạc nơi nao?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2013_12_10/hoangdungquachtinh1.jpg" alt="Joe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Hoàng Bá Bá</span>
                                                <span class="message">Mau mau về Cái Bang Quá Nhi!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="http://img.v3.news.zdn.vn/w660/Uploaded/rdsis/2013_09_30/thandieu2.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Doãn Chí Bình</span>
                                                <span class="message">Dạo này võ công thăng mấy bậc rồi đệ!</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr />

                                    <div class="text-right">
                                        <a href="#" class="view-more">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge">3</span>
                            </a>

                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Thông báo
                                </div>

                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-thumbs-down bg-danger"></i>
                                                </div>
                                                <span class="title">Gửi thông tin liên hệ</span>
                                                <span class="message">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-lock bg-warning"></i>
                                                </div>
                                                <span class="title">User Locked</span>
                                                <span class="message">15 minutes ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-signal bg-success"></i>
                                                </div>
                                                <span class="title">Connection Restaured</span>
                                                <span class="message">10/10/2014</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr />

                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <span class="separetor-end"></span>

                    <div id="userbox" class="userbox">


                <?PHP
                        session_start();
//                        var_dump($_SESSION['userInfo']);die;
                        ?>
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="http://img.v3.news.zdn.vn/w660/Uploaded/wobvjju/2014_11_27/cothienlac.jpg" alt="Quá Nhi" class="img-circle" data-lock-picture="http://img.v3.news.zdn.vn/w660/Uploaded/wobvjju/2014_11_27/cothienlac.jpg" />

                            </figure>
                            <div class="profile-info" data-lock-name="Dương Quá" data-lock-email="thandieudaihiep@quanhi.com">
                                <span class="name"><?php echo $_SESSION['userInfo']["employee_name"];?></span>
                                <span class="role"><?php if($_SESSION['userInfo']["level"] ==1){echo "admim";}else{echo "Nhan vien";} ?></span>
                            </div>

                            <i class="fa custom-caret"></i>
                        </a>

                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="{{asset('admin/pages_user_profile')}}"><i class="fa fa-user"></i>Tài khoản </a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Khóa màn hình</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="{{url('admin/logout')}}"><i class="fa fa-power-off"></i> Đăng xuất</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->