@extends('layout.index')
@section('content')

    <article class="col-sm-push-3 col-sm-9">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="4"></li>

            </ol>
            <div class="carousel-inner">
                <!-- slide -->
                <?php $i = 1; ?>
                @foreach($topTour as $tour)
                    @if($i == 1)
                        <div class="item active">
                            @else
                                <div class="item">
                                    @endif

                                    @foreach($imgTours as $img)
                                        @if($img->tour_id == $tour->tour_id)
                                            <img src="{{$img->image}}" alt="image tour"  class="slide-image"/>
                                            <div class="bs-slider-overlay"></div>
                                        <?php break;?>
                                    @endif
                                @endforeach
                                <!-- Slide Text Layer -->
                                    <div class="slide-text slide_style_center">
                                        <h3 data-animation="animated flipInX">
                                            {{$tour->tour_name}}
                                        </h3>
                                        <!-- hành trình tour -->
                                        <p data-animation="animated lightSpeedIn">
<!--                                            --><?php
//                                            $journey = $tour->journey;//có dạng list các id của các place
//                                            $placeList = explode('-', $journey);
//                                            $journeyTour = "";
//                                            foreach($placeList as $placeId) {
//                                                foreach($places as $place) {
//                                                    if($place->place_id == $placeId) {
//                                                        $journeyTour .= $place->place_name.', ';
//                                                    }
//                                                }
//                                            }
//                                            //loại bỏ ký tự ', ' cuối cùng trong chuỗi
//                                            echo substr($journeyTour,0,-2);
//                                            ?>
                                        </p>
                                        <!-- end: hành trình tour -->
                                        <button class="btn btn-warning" data-animation="animated  fadeInUp"><del>{{number_format($tour->base_prices)}}</del></button>
                                        <a href="{{asset(route('gettourOder', ['tourId' => $tour->tour_id]))}}" target="_blank" class="btn btn_slide btn-primary" data-animation="animated fadeInUp"><strong>Đặt ngay</strong></a> &nbsp;&nbsp;
                                        <button target="_blank" class="btn btn-danger" data-animation="animated fadeInUp">
                                            <strong>{{number_format($tour->sale_prices)}}</strong>
                                        </button>
                                    </div>
                                </div>
                                <?php $i++; ?>
                                @endforeach
                        </div>

            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <div class="row show_result">
            <div class="col-sm-6">
                <p>Hiển thị <strong>10</strong> trong tổng số <strong>500</strong> tour du lịch</p>
            </div>
            <div class="col-sm-3 col-sm-offset-3">
                <select class="form-control">
                    <option>Sắp xếp theo</option>
                    <option>Mới nhất</option>
                    <option>Giá rẻ nhất</option>
                    <option>Đánh giá tốt nhất</option>
                </select>
            </div>
        </div>
        @foreach($listTours as $tour)

        {{--@foreach($tours as $tour)--}}
        <div class="hotel_item row">

            {{--ảnh tour--}}
            <div class="col-sm-3  image_hotel">
                @foreach($imgTours as $img)
                    @if($img->tour_id == $tour->tour_id)
                        <a href="{{asset(route('gettourDetai',['idTour' => $tour->tour_id]))}}"><img src="{{$img->image}}" alt="image_tour" class="img-responsive"/></a>
                        {{--<a href="{{asset('gettourDetai')}}"><img src="{{$img->image}}" alt="" class="img-responsive"/></a>--}}
                        <?php break;?>
                    @endif
                @endforeach
            </div>
            {{--end: ảnh tour            --}}

            {{--thông tin chung--}}
            <div class="col-sm-6  info_hotel">
                <h3><a href="{{asset(route('gettourDetai',['idTour' => $tour->tour_id]))}}">{{$tour->tour_name}}</a> </h3>
                <div class="hotel_position">
                    <span class="hotel_star">

                </span>
                    <span class="hotel_map">
                        <a  href="{{asset(route('gettourDetai',['idTour' => $tour->tour_id]))}}">Xem chi tiết</a>
                </span>
                </div>

                <div class="hotel_border">
                    <div class="hotel_address">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$tour->tour_name}}&nbsp;</p>
                        {{--<p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;{{$tours->tour_name}}</p>--}}
                        <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: {{$tour->begin_time}}</p>
                    </div>

                    {{--phương tiện--}}
                    <div class="hotel_ultilities">
                        <ul class="list-inline">
                            <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; {{$tour->duration}}</li>

                            <li>
                                <?php
                                $vehicle = $tour->vehicle_id;
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
                                <i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    {{--end: phương tiện--}}

                </div>
            </div>
            {{--end: thông tin chung--}}

            <div class="col-sm-3 col-xs-12">
                <div class="booking">
                    <div class="book_hotel">
                        <div class="hotel_price">
                            <del>
                                <!-- chuyển định dạng số 1002000 sang định dạng tiền chia theo 3 chữ số -->
                                <?php echo number_format((float)$tour->base_prices); ?> Đ
                            </del>
                        </div>
                    </div>
                    <div class="book_now">
                       <a><?php echo number_format((float)$tour->sale_prices); ?> Đ </a>
                    </div>
                    <div class="book_now">
                        <a href="{{asset(route('gettourOder', ['tourId' => $tour->tour_id]))}}">Đặt tour ngay</a>
                    </div>
                    <div class="free">
                        <span>Bữa sáng miễn phí</span>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

        <div class="pager">
            {{--<ul class="page-numbers">--}}
                {{--<li><a class="page-numbers disable">Trước</a></li>--}}
                {{--<li><a class="page-numbers active">1</a></li>--}}
                {{--<li><a class="page-numbers" href="">2</a></li>--}}
                {{--<li><a class="page-numbers" href="">3</a></li>--}}
                {{--<li><a class="page-numbers" href="">4</a></li>--}}
                {{--<li><a class="page-numbers" href="">5</a></li>--}}
                {{--<li><a class="page-numbers" href="">6</a></li>--}}
                {{--<li><a class="page-numbers" href="">Tiếp theo</a></li>--}}
            {{--</ul>--}}

        </div>

    </article>

    @endsection