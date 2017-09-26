
@extends('layout.index')

@section('content')


    <link rel="stylesheet" type="text/css" href="<?php getUrlThemeActive()?>admin/css/slide_hotel.css" />
    {{--<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">--}}
    {{--<div class="rg-image-wrapper">--}}
    {{--{{if itemsCount > 1}}--}}
        {{--<div class="rg-image-nav">--}}
        {{--<a href="#" class="rg-image-nav-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>--}}
        {{--<a href="#" class="rg-image-nav-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
        {{--</div>--}}
{{--{{/if}}--}}
        {{--<div class="rg-image"></div>--}}
        {{--<div class="rg-loading"></div>--}}
        {{--<div class="rg-caption-wrapper">--}}
        {{--<div class="rg-caption" style="display:none;">--}}
        {{--<p></p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
{{--</script>--}}
    <article class="col-sm-push-3 col-sm-9">

        <!--Thông tin tour + đặt tour-->
        <div class="hotel_name">
            <div class="name_star">
                <h1>{{$tours->tour_name}}</h1>
                <span class="hotel_star">
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
            </span>
            </div>
        </div>
        <div class="position">
            <i class="fa fa-map-marker" aria-hidden="true"></i><span style="font-size: 130%"> {{$tours->tour_name}}</span>
        </div>

        <div class="hotel_item row">
            <div class="col-sm-8  image_hotel">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <?php $i = 0; ?>
                    <div class="carousel-inner">
                        @foreach($imgTours as $img)
                            @if($img->tour_id == $tours->tour_id)
                                @if($i == 0)
                                    <div class="item active">
                                        @else
                                            <div class="item">
                                                @endif
                                                <img src="{{$img->image}}" alt="tour_image" style="height: 40%;">
                                            </div>
                                            <?php ++$i; ?>
                                        @endif
                                        @endforeach
                                    </div>


                                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4  info_hotel">
                <h3><a>Thông tin tour</a> </h3>
                <div class="hotel_position">
                {{--<span class="hotel_star">--}}
                    {{--@foreach($imgTours as $img)--}}
                        {{--@if($img->tour_id == $tours->tour_id)--}}
                            {{--<li><a><img src="{{$img->image}}" height="20%" width="20%" alt="" data-description="tour image" /></a></li>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--</span>--}}
                    <span class="hotel_map">
                    <a  href="{{asset(route('gettourDetai',['idTour' => $tours->tour_id]))}}">Xem chi tiết</a>
                </span>
                </div>
                <div class="hotel_border">
                    <div class="hotel_address">
                        <p class="kichThuocChu" style="font-size: 120%"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;{{$tours->tour_name}}</p>
                        <p class="kichThuocChu" style="font-size: 120%"><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: {{$tours->begin_time}}</p>
                    </div>
                    <div class="hotel_ultilities">
                        <ul class="list-inline">
                            <li style="font-size: 120%"><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; {{$tours->duration}}</li>
                            <li style="font-size: 120%"><i class="fa fa-car " aria-hidden="true"></i>&nbsp;
                                <?php
                                $vehicle = $tours->vehicle_id;
                                $vehicleList = explode('-', $vehicle);
                                foreach($vehicleList as $vehicleId) {
                                foreach($tourVehicles as $vhc) {
                                if($vhc->vehicle_id == $vehicleId) {
                                ?>
                                <i class="<?php echo $vhc->vehicle_name; ?>" aria-hidden="true"></i>&nbsp;
                                <?php
                                }
                                }
                                }
                                ?>
                                Phương tiện</li>
                        </ul>
                    </div>
                </div>
                <div class="booking">
                    <div class="book_hotel">
                        <div class="hotel_price" style="font-size: 170%">
                            <del>
                                <?php echo number_format((float)$tours->base_prices);?> Đ
                            </del>
                        </div>

                    </div>

                    <div class="book_now" style="font-size: 170%">
                        <?php echo number_format((float)$tours->sale_prices); ?> Đ
                    </div>
                </div>
            </div>
        </div>

        <!--Chi tiết nhà nghỉ-->
        <div class="hotel_Detail">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Tổng quan</a></li>
                <li role="presentation"><a href="#price" aria-controls="price" role="tab" data-toggle="tab">Lịch trình</a></li>
                <li role="presentation"><a href="#ultilities" aria-controls="ultilities" role="tab" data-toggle="tab">Dịch vụ</a></li>
                <li role="presentation"><a href="#appraise" aria-controls="appraise" role="tab" data-toggle="tab">Ghi chú</a></li>
            </ul>

            <div class="tab-content">
                <!-- Tổng quát -->
                <div role="tabpanel" class="tab-pane active" id="information">
                    {!!$tours->overview!!}
                </div> <!-- end: tổng quát -->
                <!-- lịch trình -->
                <div role="tabpanel" class="tab-pane" id="price">
                    {!!$tours->schedule!!}
                </div>
                <div role="tabpanel" class="tab-pane" id="ultilities">
                    <div class="list_ultilities">
                        <?php
                        $serviceList = $tours->services;
                        $serviceList = explode('-', $serviceList);
                        foreach($serviceList as $serviceId) {
                        foreach($tourServices as $sv) {
                        if($sv->service_id == $serviceId) {
                        ?>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> <?php echo $sv->service_name; ?></p>

                        <?php
                        break;
                        }
                        }
                        }
                        ?>
                </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="appraise">
                    {!!$tours->note!!}
                </div>
            </div>

            <form action="{{asset(route('postPayTour'))}}" id="booktour-form" method="post" style="background-color: #b2dba1; padding: 10px">
                <div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="tourId" id="tourId" value="{{$tours->tour_id}}"/>
                    <div class="mda-tilte-3">
                        <span class="mda-tilte-name" style="font-weight: bold; color: red">THÔNG TIN ĐẶT TOUR CỦA KHÁCH HÀNG</span>
                    </div>

                    {{--<div id="mda-guest-b" class="">--}}
                        {{--<div class="form-group col-md-4">--}}
                            {{--<label for="phone">Email *:<span id="bookPhoneError" class="error"></span></label>--}}
                            {{--<input data-error="#bookPhoneError" type="text" name="email" id="email" value="" class="form-control numeric" placeholder="Nhập họ tên " required>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-4">--}}
                            {{--<label for="phone">Số điện thoại *:<span id="bookPhoneError" class="error"></span></label>--}}
                            {{--<input data-error="#bookPhoneError" type="text" name="phone" id="phone" value="" class="form-control numeric" placeholder="Nhập số điện thoại" required>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-4">--}}
                            {{--<label for="address">Địa chỉ *:<span id="bookAddressError" class="error"></span></label>--}}
                            {{--<input data-error="#bookAddressError" type="text" name="address" id="address" class=" form-control " placeholder="Nhập địa chỉ" required>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-8">--}}
                            {{--<label for="note">Ghi chú:</label>--}}
                            {{--<input type="text" name="note" id="note" class="form-control" placeholder="Nhập ghi chú">--}}
                        {{--</div>--}}

                        <p class="clearfix"></p>
                        <div class="form-group col-md-4">
                            <label for="adult">Người lớn: </label>
                            <input type="number" name="adult" id="adult" class="form-control mda-quantity tour-quantity1 q-adult1" min="1" placeholder="Số lượng người lớn"/>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="child">Trẻ em(7 - 14 tuổi ): </label>
                            <input type="number" name="child" id="child" class="form-control mda-quantity tour-quantity1 q-child1" min="0" placeholder="Số lượng trẻ em từ 7 - 14 tuổi"/>
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <label for="baby">Trẻ nhỏ(0 - 7 tuổi ): </label>
                            <input type="number" name="baby" id="baby" class="form-control mda-quantity tour-quantity1 q-baby1" min="0" placeholder="Số lượng trẻ dưới 7 tuổi"/>
                        </div> -->

                    </div>
                    <p class="clearfix"></p>
                    <div class="mda-tour-customer mda-price-tour-r">
                        <table style="width: 100%" class="mda-table table">
                            <thead>

                            </thead>
                            <tbody id="customer-infos">

                            </tbody>
                            <tfoot>
                            <tr>
                                <td class="paddingtable" colspan="4"></td>
                                <td><strong>Mã giảm giá</strong></td>
                                <td colspan="4" class="price right">
                                    <div class="clearfix mda-row-f promo-box footer-sumary">
                                        <div class="mda-col mda-col-2">
                                            <span style="width:75%; float:left">
                                                <input name="discountCode" id="discountCode" style="width: 100%;" class="form-control" placeholder="Nhập M&#227; Giảm Gi&#225;" />
                                            </span> &nbsp; &nbsp;
                                            <button  class="btn btn-primary" onclick="checkDiscountCode()">Check</button>
                                        </div>
                                    </div>
                                </td>
                                <td><span id="promo-pricediscount"></span></td>
                            </tr>
                            {{--<tr>--}}
                                {{--<input type="hidden" value="{{$tours->sale_prices}}" name="salePrice" id="salePrice"/>--}}
                                {{--<td colspan="5"></td>--}}
                                {{--<td colspan="3"><strong>Tổng giá trị tour</strong></td>--}}
                                {{--<td class="price right">--}}
                                    {{--<input type="text" value="{{$tours->sale_prices}}"  readonly />--}}
                                    {{--<span class="mda-money" id="sumary" style="max-width: 80px; text-align:right"></span>đ--}}

                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td colspan="5"></td>--}}
                                {{--<td colspan="3"><strong>Tiền đặt cọc</strong></td>--}}
                                {{--<td class="price right">--}}
                                    {{--<input type="text" name="holdprice" value="0" readonly/>--}}
                                    {{--<span class="mda-money" id="holdprice" style="max-width: 80px; text-align:right"></span>đ--}}
                                {{--</td>--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                                {{--<td colspan="5"></td>--}}
                                {{--<td colspan="3"><strong>Thanh toán</strong></td>--}}
                                {{--<td class="price right">--}}
                                    {{--<input type="text" value="0" readonly/>--}}
                                    {{--<span class="mda-money" id="payprice" style="max-width: 80px; text-align:right"></span>đ--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            </tfoot>
                        </table>
                    </div>
                    <p class="clearfix"></p>
                    <div class="mda-provision">
                        <h3>Điều khoản thanh toán</h3>
                        <div style="height: 150px; width: 760px; width: auto; overflow: auto; border: 1px solid #ccc;">
                            <h4 style="text-align:justify"> CÁC HÌNH THỨC THANH TOÁN TẠI DU LỊCH SUNSHINE</h4>

                            <p style="text-align:justify"><strong>1, Thanh toán bằng tiền mặt:</strong></p>

                            <p style="text-align:justify">Qúy khách vui lòng đến trụ sở của công ty hoặc các chi nhánh văng phòng của công ty du lịch VIETTRAVEL để thanh toán</p>

                            <p style="text-align:justify"><strong>2, H&igrave;nh thức chuyển khoản ng&acirc;n h&agrave;ng:</strong></p>

                            <p style="text-align:justify">T&ecirc;n t&agrave;i khoản: C&Ocirc;NG TY CỔ PHẦN TRUYỀN TH&Ocirc;NG DU LỊCH VIỆT</p>

                            <p style="text-align:justify">Ngân hàng: </p>
                            <p>
                                AGRIBANK &ndash; T&agrave;i khoản: 123456782902
                            </p>
                            <p>
                                MB &ndash; T&agrave;i khoản: 1234567899811
                            </p>
                            <p>
                                ACB &ndash; T&agrave;i khoản: 123456789872
                            </p>

                            <p style="text-align:justify">Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với <span style="color:#FF0000"><strong>HOTLINE:&nbsp;&Acirc;u - &Uacute;c - Mỹ: 0938.30.44.88 | Ch&acirc;u &Aacute;: 0938.346.588 | Trong nước: 0909.189.888 &nbsp;để được hỗ trợ, tư vấn chi tiết </strong></span>về h&igrave;nh thức thanh to&aacute;n chuyển khoản.</p>

                            <p style="text-align:justify">Khi thực hiện việc chuyển khoản, qu&yacute; kh&aacute;ch vui l&ograve;ng ghi r&otilde; họ t&ecirc;n, địa chỉ, điện thoại v&agrave; nội dung chuyến du lịch cụ thể đ&atilde; được qu&yacute; kh&aacute;ch chọn đăng k&yacute;.<br />
                                Sau khi thực hiện việc chuyển khoản, qu&yacute; kh&aacute;ch vui l&ograve;ng Fax Ủy Nhiệm Chi về c&ocirc;ng ty v&agrave; liện hệ nh&acirc;n vi&ecirc;n phụ tr&aacute;ch tuyến để nhận được v&eacute; du lịch ch&iacute;nh thức từ c&ocirc;ng ty Du Lịch Việt.</p>
                        </div>

                    </div>
                    <br />
                    <div class="pull-left">
                        <label class="radio-inline"><input type="checkbox" name id="accept-policy" required><strong> Tôi đã đọc và chấp nhận điều khoản trên</strong></label>
                    </div>
                    <!-- <input type="hidden" name="codeDay" id="codeDay" value="15-07-2017" />
                    <input type="hidden" name="customerlistjson" id="customerlist-json" />
                    <input type="hidden" id="valid-customerjson" />
                    <input type="hidden" name="type" value="3" />
                    <input type="hidden" id="sumary-post" name="sumary" value="0" />
                    <input type="hidden" name="scheduleid" value="1cwPgwrvoPI%3d" /> -->
                    <div class="panel-body">
                        <div class=" clearfix pull-right">
                            <input class="btn btn-success" type="submit" value="HOÀN TẤT ĐẶT TOUR" />
                        </div>
                    </div>
            </form>
            <!-- end: form thanh toán -->
            <div class="hotel_relate">
                <h3>Tour du lịch liên quan</h3>
                <div class="row">
                    @foreach($relativeTours as $relativeTour)
                        <div class="col-sm-4">
                            <div class="hr_item">
                                <!-- giá tour liên quan -->
                                <div class="">
                                    <strong class="btn btn-primary"><?php echo number_format((float)$relativeTour->sale_prices); ?> Đ</strong>

                                    <a href="{{asset(route('gettourOder', ['tourId' => $relativeTour->tour_id]))}}" class="btn btn_slide">Đặt tour ngay</a>
                                </div> <br>
                                <!-- end: giá tour liên quan -->

                                <div class="image_hotel">
                                    @foreach($imgTours as $img)
                                        @if($img->tour_id == $tours->tour_id)
                                            <li><a href="{{asset(route('gettourDetai', ['idTour' => $relativeTour->tour_id]))}}"><img src="{{$img->image}}" height="20%" width="20%" alt="" data-description="tour image" /></a></li>
                                            <?php break;?>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="info_hotel">
                                <h3><a href="{{asset(route('gettourDetai', ['idTour' => $relativeTour->tour_id]))}}">{{$relativeTour->tour_name}}</a> </h3>
                                <!-- giá vé tour -->

                                <!-- end: giá vé tour -->
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </article>


    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/gallery.js"></script>


    @endsection
