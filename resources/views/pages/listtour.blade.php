
@extends('admin.index')
@section('content')
    <article class="col-sm-push-3 col-sm-9">

        <div class="row show_result">
            <div class="col-sm-6">
                <!-- <p>Hiển thị <strong>10</strong> trong tổng số <strong>500</strong> tour du lịch</p> -->
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

        <!-- Danh sách 10 tour du lịch -->
        <h2 class="page_title">Danh sách tour:</h2>
        @if(count($resultTour) == 0)
            <h3>Hiện tại không có tour du lịch nào</h3>
        @else
            @foreach($resultTour as $tour)
                <div class="hotel_item row">
                    <div class="col-sm-3  image_hotel">
                        @foreach($imgTours as $img)
                            @if($img->tour_id == $tour->tour_id)
                                <a href="{{asset(route('gettourDetai', ['idTour' => $tour->tour_id]))}}"><img src="{{$img->image}}" alt="image_tour" class="img-responsive"/></a>
                                <?php break;?>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-sm-6  info_hotel">
                        <!-- tên tour -->
                        <h3><a href="{{asset(route('gettourDetai', ['idTour' => $tour->tour_id]))}}">{{$tour->tour_name}}</a> </h3>
                        <!-- end:tên tour -->
                        <div class="hotel_position">
                        <span class="hotel_map">
                            <a  href="{{asset(route('gettourDetai', ['idTour' => $tour->tour_id]))}}">Xem chi tiết</a>
                        </span>
                        </div>
                        <div class="hotel_border">
                            <div class="hotel_address">
                                <!-- hành trinh -->
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;
                                    <?php
                                    $journey = $tour->journey;//có dạng list các id của các place
                                    $placeList = explode('-', $journey);
                                    $journeyTour = "";
                                    foreach($placeList as $placeId) {
                                        foreach($places as $place) {
                                            if($place->place_id == $placeId) {
                                                $journeyTour .= $place->place_name.', ';
                                            }
                                        }
                                    }
                                    //loại bỏ ký tự ', ' cuối cùng trong chuỗi
                                    echo substr($journeyTour,0,-2);
                                    ?>
                                </p>
                                <!-- end: hành trình -->

                                <!-- ngày khởi hanhf -->
                                <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: {{$tour->begin_time}}</p>
                                <!-- end: ngày khởi hành -->
                            </div>
                            <div class="hotel_ultilities">
                                <ul class="list-inline">
                                    <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; {{$tour->duration}}</li>
                                    <li>
                                        {{--<?php--}}
                                        {{--$vehicle = $tour->vehicle;--}}
                                        {{--$vehicleList = explode('-', $vehicle);--}}
                                        {{--foreach($vehicleList as $vehicleId) {--}}
                                        {{--foreach($tourVehicles as $vhc) {--}}
                                        {{--if($vhc->vehicle_id == $vehicleId) {--}}
                                        {{--?>--}}
                                        {{--<i class="<?php echo $vhc->class_name; ?>" aria-hidden="true"></i>&nbsp;--}}
                                    {{--<?php--}}
                                    {{--}--}}
                                    {{--}--}}
                                    {{--}--}}
                                    {{--?>--}}
                                    <!-- <i class="fa fa-car " aria-hidden="true"></i>&nbsp;  -->
                                        Phương tiện</li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                                <a>
                                    <?php echo number_format((float)$tour->sale_prices); ?> Đ
                                </a>
                            </div>
                            <div class="free">
                                <!-- <span>Đặt tour ngay</span> -->
                                <a href="{{asset(route('gettourOder', ['tourId' => $tour->tour_id]))}}"><span>Đặt tour ngay</span></a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    @endif
    <!-- End: Danh sách 10 tour du lịch -->

        <!-- Đánh số trang -->
        <div style="text-align: center;">
            <?php echo $resultTour->render(); ?>
        </div>
        <!-- end: Đánh số trang -->
    </article>
    @endsection