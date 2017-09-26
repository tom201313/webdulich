@extends('admin.layout.master')
<!-- //tiêu đề -->
@section('title')
Add tour
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
                    <small>Thêm tour du lịch</small>
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
                <form action="{{asset(route('postAddTour'))}}" method="POST">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                    <div class="form-group">
                        <label for="name">Tên tour:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên tour" required/>
                    </div>
                    <div class="form-group">
                        <label for="basePrice">Giá cơ bản</label>
                        <input class="form-control" name="basePrice" id="basePrice" type="number" placeholder="Nhập giá tour cơ bản" required/>
                    </div>
                    <div class="form-group">
                        <label for="salePrice">Giá khuyến mại:</label>
                        <input type="number" class="form-control" name="salePrice" id="salePrice" placeholder="Nhập giá khuyến mại"/>
                    </div>
                    <div class="form-group">
                        <label for="discountCode">Mã giảm giá</label>
                        <select id="discountCode" class="form-control" name="discountCode">
                            @if(isset($discounts))
                            <option value="13">None</option>
                            @foreach($discounts as $discount)
                            <option value="{{$discount->discount_code_id}}">{{$discount->discount_code_name}}&nbsp;&nbsp;&nbsp;
                                (Trị giá:{{$discount->money}} đồng)</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="description">Mô tả tour:</label>
                            <textarea class="form-control" cols="4" name="description" id="description" required></textarea>
                        </div> -->
                        <div class="form-group">
                            <label for="beginTime">Ngày giờ bắt đầu:</label>
                            <input class="form-control" type="text" placeholder="Nhập ngày giờ xuất phát" id="beginTime" name="beginTime" required />
                        </div>
                        <div class="form-group">
                            <label for="duration">Thời gian tour diễn ra:</label>
                            <input type="text" name="duration" id="duration" class="form-control" required placeholder="Nhập khoảng thời gian diễn ra tour">
                        </div>
                        <div class="form-group">
                            <label for="numberCustomer">Số lượng khách hàng tối đa:</label>
                            <input type="number" name="numberCustomer" id="numberCustomer" class="form-control" required placeholder="Nhập số lượng khách hàng tối đa.">
                        </div>
                        <!-- nơi khách đến để đi du lich -->
                        <div class="form-group">
                            <label for="startPlace">Địa điểm đón khách:</label>
                            <input type="text" name="startPlace" id="startPlace" class="form-control" required placeholder="Nhập địa điểm đón khách">
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh:</label><br />
                            <?php showUploadFile('image', 'image', '', 3);?>
                        </div>
                        <div class="form-group">
                            <label for="vehicle">Phương tiện:</label>
                            <select name="vehicle[]" class="form-control" size="5" multiple>
                                @if(isset($vehicles))
                                @foreach($vehicles as $vehicle)
                                <option value="{{$vehicle->vehicle_id}}">{{$vehicle->vehicle_name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service">Dịch vụ:</label>
                            <select name="service[]" class="form-control" size="5" multiple>
                                @if(isset($services))
                                @foreach($services as $service)
                                <option value="{{$service->service_id}}">{{$service->service_name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group dropdown">
                            <label for="journey">Hành trình tour( Chọn lần lượt từng địa điểm):</label><br />
                            <div class="dropdown" id="cssmenu">
                                <select class="form-control" name="journey[]" multiple size="15">
                                    <option disabled>
                                        Chọn danh sách địa điểm
                                    </option>
                                    <?php
                                    cate_parent($places);
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="schedule">Mô tả lịch trình tour:</label>
                            <textarea class="form-control" cols="5" name="schedule" id="schedule"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="note">Thông tin cần lưu ý:</label>
                            <textarea class="form-control" cols="5" name="note" id="note"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="overview">Mô tả tổng quát tour:</label>
                            <!-- <textarea class="form-control" cols="5" name="overview" id="overview" required></textarea> -->
                            <?php showEditorInput("overview", "overview", "", "ckeditor"); ?>

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Tour" name="addTourBtn">
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
