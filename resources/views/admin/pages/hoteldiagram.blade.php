 @include('admin.header')
@include ('admin.sidebar-left')

<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic'
      rel='stylesheet' type='text/css'>
<link href="css/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.contextMenu.min.js" type="text/javascript"></script>
<script src="http://swisnl.github.io/jQuery-contextMenu/js/main.js" type="text/javascript"></script>

<script type="text/javascript">
    var urlPaid = "check-out.php";
    var urlEdit = "";
    var urlBookroom = "check-in.php";
    var urlEditcost = "http://";
    var urlChangeroom = "";
    var urlAddservice = "addnewservices.php";
    var urlCreatebill = "";
    var urlUpdatestatus = "";
    var urlReceived = "check-in.php";
    var urlEdit = "";
    var urlAddroom = "addnewroom.php";
    var urlListwaiting = "list-waiting.php";
    var urlViewroomdetail ="view-roomdetail.php";

    $(function () {
        // lựa chọn đã có người chuột phải
        $.contextMenu({
            selector: '.context-menu-one',
            callback: function (key, options) {

                switch (key) {
                    case 'paid':
                        url = urlPaid + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'edit':
                        url = urlEdit + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'bookroom':
                        url = urlBookroom + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'editcost':
                        url = urlEditcost + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'changeroom':
                        url = urlChangeroom + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'addservice':
                        url = urlAddservice + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'createbill':
                        url = urlCreatbill + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'updatestatus':
                        url = urlUpdatestatus + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;                    
                    case 'view':
                        url = urlViewroomdetail + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;                    

                }

                window.location = url;
            },
            items: {
                "paid": {name: "Trả phòng/Cập nhật HĐ", icon: "checkout", accesskey: "c o"},
                "edit": {name: "Chỉnh sửa/Chèn khách", icon: "edit", accesskey: "e"},
                "sep1": "---------",
                "bookroom": {name: "Đặt phòng trước", icon: "checkin", accesskey: "b"},
                "editcost": {name: "Chỉnh sửa giá phòng", icon: "edit", accesskey: "e c"},
                "changeroom": {name: "Chuyển phòng", icon: "change", accesskey: "c r"},
                "addservice": {name: "Thêm dịch vụ", icon: "add", accesskey: "a s"},
                "createbill": {name: "Tạo hóa đơn dịch vụ", icon: "create", accesskey: "c t"},
                "updatestatus": {name: "Cập nhật trạng thái", icon: "update", accesskey: "u s"},
                "view": {name: "Xem thông tin chi tiết", icon: "view", accesskey: "u s"},
                
            }
        });

        // lựa chọn chưa có người chuột phải
        $.contextMenu({
            selector: '.context-menu-two',
            callback: function (key, options) {
                switch (key) {
                    case 'received':
                        url = urlReceived + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'bookroom':
                        url = urlBookroom + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'edit':
                        url = urlEdit + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'delete':
                        url = urlDelete + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'updatestatus':
                        url = urlChangeroom + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'listwaiting':
                        url = urlListwaiting + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;

                }

                window.location = url;
            },
            items: {
                "received": {name: "Nhận phòng", icon: "received", accesskey: "r"},
                "sep1": "---------",
                "bookroom": {name: "Đặt phòng trước", icon: "checkin", accesskey: "b"},
                "updatestatus": {name: "Cập nhật trạng thái", icon: "update", accesskey: "u s"},
                "edit": {name: "Chỉnh sửa", icon: "edit", accesskey: "e"},
                "delete": {name: "Xóa phòng", icon: "delete", accesskey: "d"},
                "listwaiting": {name: "Danh sách khách chờ", icon: "list"},
            }
        });

        // lựa chọn đã có người chuột trái
        $.contextMenu({
            selector: '.context-menu-one',
            trigger: 'left',
            callback: function (key, options) {
                var m = "clicked: " + key;
                alert(m);
            },
            items: {
                "paid": {name: "Trả phòng/Cập nhật HĐ", icon: "checkout", accesskey: "p"},
                "edit": {name: "Chỉnh sửa/Chèn khách", icon: "edit", accesskey: "e"},
                "sep1": "---------",
                "bookroom": {name: "Đặt phòng trước", icon: "checkin", accesskey: "b"},
                "editcost": {name: "Chỉnh sửa giá phòng", icon: "edit", accesskey: "e c"},
                "changeroom": {name: "Chuyển phòng", icon: "change", accesskey: "c r"},
                "addserviec": {name: "Thêm dịch vụ", icon: "add", accesskey: "a "},
                "createbill": {name: "Tạo hóa đơn dịch vụ", icon: "create", accesskey: "c t"},
                "updatestatus": {name: "Cập nhật trạng thái", icon: "update", accesskey: "u s"},
                "view": {name: "Xem thông tin chi tiết", icon: "view", accesskey: "u s"},
            }
        });

        // lựa chọn chưa có người chuột trái
        $.contextMenu({
            selector: '.context-menu-two',
            trigger: 'left',
            callback: function (key, options) {
                var m = "clicked: " + key;
                alert(m);
            },
            items: {
                "received": {name: "Nhận phòng", icon: "received", accesskey: "r"},
                "sep1": "---------",
                "bookroom": {name: "Đặt phòng trước", icon: "checkout", accesskey: "b"},
                "updatestatus": {name: "Cập nhật trạng thái", icon: "update", accesskey: "u s"},
                "edit": {name: "Sửa cài đặt phòng", icon: "edit", accesskey: "e"},
                "delete": {name: "Xóa phòng", icon: "delete", accesskey: "d"},
                "listwaiting": {name: "Danh sách khách chờ", icon: "list"},
            }
        });

        $.contextMenu({
            selector: '.context-menu-three',
            callback: function (key, options) {

                switch (key) {
                    case 'addroom':
                        url = urlAddroom + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                    case 'edit':
                        url = urlEdit + '?idRoom=' + options.$trigger.attr("idRoom");
                        break;
                }

                window.location = url;
            },
            items: {
                "addroom": {name: "Thêm phòng", icon: "add", accesskey: "a"},
                "edit": {name: "Sửa tên tầng", icon: "edit", accesskey: "e"},
            }
        });

        $.contextMenu({
            selector: '.context-menu-three',
            trigger: 'left',
            callback: function (key, options) {
                var m = "clicked: " + key;
                alert(m);
            },
            items: {
                "addroom": {name: "Thêm phòng", icon: "add", accesskey: "a"},
                "edit": {name: "Sửa tên tầng", icon: "edit", accesskey: "e"},
            }
        });
    });
</script>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Sơ đồ khách sạn</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Cài đặt chung</span></li>
                <li><span>Sơ đồ khách sạn</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Sơ đồ khách sạn</h2>
        </header>
        <div class="panel-body">   
            <div class="row">
                <div class="col-sm-12">
                    <span class="statistic"><label class="clear">9</label> còn trống</span>
                    <span class="statistic"><label class="living">9 </label> đang ở</span>
                    <span class="statistic"><label class="waiting">0 </label> Chờ khách</span>
                    <span class="statistic"><label class="number">0 </label> Cần sửa</span>
                    <span class="statistic"><label class="number">0 </label> Chưa dọn</span>
                    <span class="statistic"><label class="number"> 0 </label> 1 Đôi</span>
                    <span class="statistic"><label class="number">0 </label> 2 Đơn</label></span>
                    <span class="statistic"><label class="number"> 2 </label> 1 Đơn 1 Đôi</span>
                </div>
            </div>
            <div class="row">
                <div class="selectdiagram">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <select id="company" class="form-control" required>
                                <option value="">Sắp xếp theo tầng</option>
                                <option value="">Sắp xếp theo phòng</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row diagram">
                <div class="col-md-1 col-sm-2 floors context-menu-three">Tầng 1</div>
                <div class="col-md-11 col-sm-10">
                    <div class="row">
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="101">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div>                   
                            <div class="customer-name"><span class="room-number">101</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="103">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div>   
                            <div class="customer-name"><span class="room-number">103</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>

                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="104">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">104</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="105">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">105</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>

                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="102">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">102</span></div>

                        </div>
                    </div>
                </div>
            </div>          
            <div class="row diagram">
                <div class="col-md-1 col-sm-2 floors context-menu-three">Tầng 2</div>
                <div class="col-md-11 col-sm-10">
                    <div class="row">
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="201">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">201</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="202">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">202</span></div>                   
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="203">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">203</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="204">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">204</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="205">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>10h <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">205</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="row diagram">
                <div class="col-sm-2 col-md-1 floors context-menu-three">Tầng 3</div>
                <div class="col-sm-10 col-md-11">
                    <div class="row">
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="301">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>15h <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">301</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="302">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">302</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="303">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">303</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="304">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">304</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="305">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">305</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="305">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">305</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="304">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">304</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 waiting-room context-menu-two" idRoom="304">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">304</span></div>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="row diagram">
                <div class="col-sm-2 col-md-1 floors context-menu-three">Tầng 4</div>
                <div class="col-sm-10 col-md-11">
                    <div class="row">
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="401">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">401</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="402">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">402</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="403">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">403</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="404">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">404</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="405">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">405</span></div>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="row diagram">
                <div class="col-sm-2 col-md-1 floors context-menu-three">Tầng 5</div>
                <div class="col-sm-10 col-md-11">
                    <div class="row">
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="501">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">501</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="502">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">502</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="503">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">503</span></div>
                            <div class="imageclean">
                                <img src="images/clean.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2 clear-room context-menu-two" idRoom="504">
                            <div class="name-room">1 đơn 1 đôi</div>
                            <div class="customer-name"><span class="room-number">504</span></div>
                        </div>
                        <div class="col-sm-4 col-md-2 booked context-menu-one" idRoom="505">
                            <div class="name-room">1 Đơn</div>
                            <div class="time">
                                <div class="progress progress-xs light" style="margin-bottom: 0; margin-top: 3px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                                <span>1 ngày <br/>25-26/12</span>
                            </div> 
                            <div class="customer-name"><span class="room-number">505</span>  <br/><span>(1) Nguyễn Văn A</span></div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </section>

    <!-- end: page -->
</section>
</div>
<div id="dialog" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Bạn có chắc?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>Bạn có chắc muốn xóa dòng này?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="dialogConfirm" class="btn btn-primary">Xóa</button>
                    <button id="dialogCancel" class="btn btn-default">Hủy</button>
                </div>
            </div>
        </footer>
    </section>
</div>
@include ('admin.sidebar-right')