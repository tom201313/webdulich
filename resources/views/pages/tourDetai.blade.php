
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

        <!--Thông tin nhà nghỉ + đặt phòng-->
        <div class="hotel_name">
            <div class="name_star">
                <h1>{{$tours->tour_name}}</h1>

                <span class="hotel_star">
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267 -.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
            </span>
            </div>
            <div class="book_roomDetail">
                <a href="{{asset(route('gettourOder', ['tourId' => $tours->tour_id]))}}" class="btn btn_slide">Đặt tour ngay</a>
            </div>
        </div>

        <div class="position">
            <i class="fa fa-map-marker" aria-hidden="true"></i> {{$tours->tour_name}}
        </div>
        <!--Slide ảnh nhà nghỉ-->
        <div id="rg-gallery" class="rg-gallery">
            <div class="rg-thumbs">
                <div class="es-carousel-wrapper">
                    {{--<div class="es-nav">--}}
                        {{--<span class="es-nav-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>--}}
                        {{--<span class="es-nav-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>--}}
                    {{--</div>--}}
                    <div class="es-carousel">
                        <ol class="hinhanh">
                            @foreach($imgTours as $img)
                                @if($img->tour_id == $tours->tour_id)
                                    <li><a><img src="{{$img->image}}" alt="" data-description="tour image" /></a></li>
                                @endif
                            @endforeach
                        </ol>
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
                <div role="tabpanel" class="tab-pane active" id="information">
                    {!!$tours->overview!!}
                    <h3 class="text-center"><em>Rất hân hạnh được đón tiếp và phục vụ quý khách!</em></h3>

                </div>

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
        </div>

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

    </article>


    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="<?php getUrlThemeActive()?>admin/js/gallery.js"></script>


    @endsection