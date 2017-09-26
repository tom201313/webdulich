@extends('admin.layout.master')
<!-- //tiêu đề -->
@section('title')
Edit tour
@endsection
<!-- phần css -->
@section('css')
@endsection
<!-- nội dung -->
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour du lịch
                    <small>Chỉnh sửa du lịch</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <!-- thông báo lỗi? -->
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('noti'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{session('noti')}}</li>
                    </ul>
                </div>
                @endif
                <!-- end:thông báo lỗi -->
                <form action="{{asset(route('postEditTour'))}}" method="POST">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                    <input type="hidden" value="{{$tour->tour_id}}" name="id" />
                    <div class="form-group">
                        <label for="name">Tên tour:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên tour" value="{{$tour->tour_name}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="basePrice">Giá cơ bản</label>
                        <input class="form-control" name="basePrice" id="basePrice" type="number" placeholder="Nhập giá tour cơ bản" value="{{$tour->base_price}}"required/>
                    </div>
                    <div class="form-group">
                        <label for="salePrice">Giá khuyến mại:</label>
                        <input type="number" class="form-control" name="salePrice" id="salePrice" placeholder="Nhập giá khuyến mại" value="{{$tour->sale_price}}"/>
                    </div>
                    <div class="form-group">
                        <label for="discountCode">Mã giảm giá</label>
                        <select id="discountCode" class="form-control" name="discountCode">
                            @foreach($discounts as $discount)
                                @if($discount->discount_code_id == $tour->discount_code_id)
                                    <option value="{{$discount->discount_code_id}}" selected= 'selected'>{{$discount->discount_code_name}}&nbsp;&nbsp;&nbsp;
                                        (Trị giá:{{$discount->money}} đồng)</option>
                                @else
                                    <option value="{{$discount->discount_code_id}}">{{$discount->discount_code_name}}
                                        &nbsp;&nbsp;&nbsp;(Trị giá:{{$discount->money}} đồng)</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="description">Mô tả tour:</label>
                            <textarea class="form-control" cols="4" name="description" id="description" required>{{$tour->content}}</textarea>
                        </div> -->
                        <div class="form-group">
                            <label for="beginTime">Ngày giờ bắt đầu:</label>
                            <input class="form-control" type="text" placeholder="Nhập ngày giờ xuất phát" id="beginTime" name="beginTime" value="{{$tour->begin_time}}" required />
                        </div>
                        <div class="form-group">
                            <label for="duration">Thời gian tour diễn ra:</label>
                            <input type="text" name="duration" id="duration" class="form-control" value="{{$tour->duration}}"required placeholder="Nhập khoảng thời gian diễn ra tour">
                        </div>
                        <div class="form-group">
                            <label for="numberCustomer">Số lượng khách hàng tối đa:</label>
                            <input type="number" name="numberCustomer" id="numberCustomer" class="form-control" value="{{$tour->max_customer_number}}"required placeholder="Nhập số lượng khách hàng tối đa.">
                        </div>
                        <!-- nơi khách đến để đi du lich -->
                        <div class="form-group">
                            <label for="startPlace">Địa điểm đón khách:</label>
                            <input type="text" name="startPlace" id="startPlace" class="form-control" value="{{$tour->start_place}}" required placeholder="Nhập địa điểm đón khách">
                        </div>
                        <div class="form-group">
                            <label>Phương tiện:</label><br />
                            <input type="checkbox" name="changeVehicle" id="changeVehicle">
                            <label for="changeVehicle">Chỉnh sửa phương tiện</label>
                            <textarea id="vehicleList" readonly class="form-control">
                                <?php
                                    $vehicleList = "";
                                    $vehilceIdList = explode('-', $tour->vehicle);
                                    foreach($vehilceIdList as $vehicleId) {
                                        foreach($vehicles as $vhc) {
                                            if($vhc->vehicle_id == $vehicleId) {
                                                $vehicleList .= $vhc->vehicle_name."-";
                                            }
                                        }
                                    }
                                    echo substr($vehicleList,0,-1);
                                ?>
                            </textarea><br />
                            <div class="">
                                <select class="form-control" name="vehicle[]" id="vehicle" multiple size="5" disabled>
                                    @if(isset($vehicles))
                                    @foreach($vehicles as $vehicle)
                                    <option value="{{$vehicle->vehicle_id}}">{{$vehicle->vehicle_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Dịch vụ:</label><br />
                            <input type="checkbox" name="changeService" id="changeService">
                            <label for="changeService">Chỉnh sửa dịch vụ</label>
                            <textarea id="changeService" readonly class="form-control">
                                <?php
                                    $serviceList = "";
                                    $serviceIdList = explode('-', $tour->services);
                                    foreach($serviceIdList as $serviceId) {
                                        foreach($services as $sv) {
                                            if($sv->service_id == $serviceId) {
                                                $serviceList .= $sv->service_name."-";
                                            }
                                        }
                                    }
                                    echo substr($serviceList,0,-1);
                                ?>
                            </textarea><br />
                            <div class="">
                                <select class="form-control" name="service[]" id="service" multiple size="5" disabled>
                                    @if(isset($services))
                                    @foreach($services as $service)
                                    <option value="{{$service->service_id}}">{{$service->service_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group dropdown">
                            <label for="journey">Hành trình tour( Chọn lần lượt từng địa điểm):</label><br />
                            <input type="checkbox" name="changeJourney" id="changeJourney" />
                            <label for="editJourney">Chỉnh sửa hành trình tour</label>
                            <textarea class="form-control" readonly>
                                <?php
                                    $journey = "";
                                    $placeIdList = explode('-', $tour->journey);
                                    foreach($placeIdList as $placeId) {
                                        foreach($places as $place) {
                                            if($place->place_id == $placeId) {
                                                $journey .= $place->place_name."-";
                                            }
                                        }
                                    }
                                    echo substr($journey,0,-1);
                                ?>
                            </textarea><br />

                            <div class="dropdown">
                                <select class="form-control" name="journey[]" id="journey" multiple size="15" disabled>
                                    <option value="" disabled>Chọn danh sách địa điểm</option>
                                    <?php
                                    cate_parent($places);
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Mô tả lịch trình tour:</label>
                            <textarea class="form-control" cols="5" name="schedule" id="schedule" required>{{$tour->overview}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Thông tin cần lưu ý:</label>
                            <textarea class="form-control" cols="5" name="note" id="note">{{$tour->note}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Mô tả tổng quát tour:</label>
                            <!-- <textarea class="form-control" cols="5" name="overview" id="overview" required>{{$tour->overview}}</textarea> -->
                            <div class="">
                                <?php showEditorInput('overview', 'overview', $tour->overview); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Edit Tour" name="addTourBtn">
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    @endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#changeJourney').change(function() {
                if ($(this).is(":checked")) {
                    $('#journey').removeAttr('disabled');
                } else {
                    $('#journey').attr('disabled', '');
                }
            });

            $('#changeVehicle').change(function() {
                if ($(this).is(":checked")) {
                    $('#vehicle').removeAttr('disabled');
                } else {
                    $('#vehicle').attr('disabled', '');
                }
            });

            $('#changeService').change(function() {
                if ($(this).is(":checked")) {
                    $('#service').removeAttr('disabled');
                } else {
                    $('#service').attr('disabled', '');
                }
            });
        });
    </script>
@endsection
