@extends('admin.layout.master')
@section('title')
    List tour
@endsection

@section('content')
<div id="page-wrapper" style="overflow-y: scroll;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour du lịch
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên tour</th>
                        <th>Giá cơ bản</th>
                        <th>Giá khuyến mãi</th>
                        <th>Mã giảm giá</th>
                        <th>Thời gian bắt đầu tour</th>
                        <th>Diễn ra bao lâu</th>
                        <th>Số khách tối đa</th>
                        <th>Địa điểm đón khách</th>
                        <th>Phương tiện</th>
                        <th>Dịch vụ</th>
                        <th>Hành trình</th>
                        <th>Lịch trình chi tiết</th>
                        <th>Lưu ý</th>
                        <th>Tổng quát</th>
                        <th>Ngày khởi tạo</th>
                        <th>Ngày cập nhât</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($tours))
                        <?php $i = 1; ?>
                        @foreach($tours as $tour)
                        <tr align="center">
                            <td>{{$i}}</td>
                            <td>{{$tour->tour_name}}</td>
                            <td>{{$tour->base_price}}</td>
                            <td>{{$tour->sale_price}}</td>
                            <td>
                                @if($tour->discount_code_id != 13)
                                    @foreach($discounts as $discount)
                                        @if($discount->discount_code_id == $tour->discount_code_id)
                                            {{$discount->discount_code_name}}
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td>{{$tour->begin_time}}</td>
                            <td>{{$tour->duration}}</td>
                            <td>{{$tour->max_customer_number}}</td>
                            <td>{{$tour->start_place}}</td>
                            <td>
                                <?php
                                    $vehicle = $tour->vehicle;
                                    $vehicleList = explode('-', $vehicle);
                                    $vehicleTour = "";
                                    foreach($vehicleList as $vehicleId) {
                                        foreach($vehicles as $vhc) {
                                            if($vhc->vehicle_id == $vehicleId) {
                                                $vehicleTour .= $vhc->vehicle_name.'-';
                                            }
                                        }
                                    }
                                    //loại bỏ ký tự '-' cuối cùng trong chuỗi

                                    echo substr($vehicleTour,0,-1);
                                ?>
                            </td>
                            <td>
                                <?php
                                    $service = $tour->services;
                                    $serviceList = explode('-', $service);
                                    $serviceTour = "";
                                    foreach($serviceList as $serviceId) {
                                        foreach($services as $sv) {
                                            if($sv->service_id == $serviceId) {
                                                $serviceTour .= $sv->service_name.'-';
                                            }
                                        }
                                    }
                                    //loại bỏ ký tự '-' cuối cùng trong chuỗi

                                    echo substr($serviceTour,0,-1);
                                ?>
                            </td>
                            <td>
                                <?php
                                    $journey = $tour->journey;//có dạng list các id của các place
                                    $placeList = explode('-', $journey);
                                    $journeyTour = "";
                                    foreach($placeList as $placeId) {
                                        foreach($places as $place) {
                                            if($place->place_id == $placeId) {
                                                $journeyTour .= $place->place_name.'-';
                                            }
                                        }
                                    }
                                    //loại bỏ ký tự '-' cuối cùng trong chuỗi
                                    echo substr($journeyTour,0,-1);
                                ?>
                            </td>
                            <td>{{$tour->schedule}}</td>
                            <td>{{$tour->note}}</td>
                            <td>{{$tour->overview}}</td>
                            <td>{{$tour->created_at}}</td>
                            <td>{{$tour->updated_at}}</td>
                            <td class="center">
                                <a href=""><i class="fa fa-trash-o  fa-fw"></i></a><br />
                                <a href="{{asset(route('getEditTour',['id' => $tour->tour_id]))}}"><i class="fa fa-pencil fa-fw"></i></a><br />
                                <a href="{{asset(route('listTourImage', ['id' => $tour->tour_id]))}}"><i class="fa fa-picture-o fa-fw"></i></a>
                            </td>
                        </tr>
                        <?php ++$i; ?>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
