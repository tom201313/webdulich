
@extends ('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Tour</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>EditTour</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <!-- start: page -->

        <div class="row">
            <div class="col-md-12">
                @if (count($errors) > 0 )
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('report'))
                    <div class="alert alert-success">
                        {{session('report')}}
                    </div>
                @endif
                <form id="summary-form" action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Edit Tour</h2>
                        </header>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tên Tour<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="tentour" value="{{$tours->tour_name}}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Giá Tour<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="base_prices" value="{{$tours->base_prices}}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Giá Tour Khuyến mãi<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="sale_prices" value="{{$tours->sale_prices}}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Mã Khuyến mãi<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select name="discountcode">
                                    @foreach($discount_code as $discountcode)
                                        @if($discountcode->discount_code_id == $tours->discount_code_id)
                                            <option value="{{$discountcode->discount_code_id}}" selected= 'selected'>{{$discountcode->discount_code_name}}&nbsp;&nbsp;&nbsp;
                                                (Trị giá:{{$discountcode->money}} đồng)</option>
                                        @else
                                            <option value="{{$discountcode->discount_code_id}}">{{$discountcode->discount_code_name}}
                                                &nbsp;&nbsp;&nbsp;(Trị giá:{{$discountcode->money}} đồng)</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label class="col-sm-3 control-label">Nội Dung<span class="required">*</span></label>--}}
                            {{--<div class="col-sm-6">--}}
                            {{--<textarea name="content" class="form-control" value="{{$tour->content}}"  required></textarea>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Thời gian khởi hành <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="begin_time" value="{{$tours->begin_time}}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Thời gian diễn ra<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="duration" value="{{$tours->duration}}" class="form-control" required/>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label class="col-sm-3 control-label">Phương tiện<span class="required">*</span></label>--}}
                            {{--<div class="col-sm-6">--}}
                            {{--<input type="text" name="vehicle" class="form-control" required/>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label>Phương tiện:</label><br />
                                <input type="checkbox" name="changeVehicle" id="changeVehicle">
                                <label for="changeVehicle">Chỉnh sửa phương tiện</label>
                                <textarea id="vehicleList" readonly class="form-control">
                                <?php
                                    $vehicleList = "";
                                    $vehilceIdList = explode('-', $tours->vehicle);
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
                                <label class="col-sm-3 control-label">số lượng khách tối đa<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="max_customer_number" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Điểm xuất phát <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="start_place" value="{{$tours->start_place}}" class="form-control" required/>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-3 control-label">Hành tình Tour<span class="required">*</span></label>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" name="journey" value="{{$tours->Journey}}" class="form-control" required/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group dropdown">
                                <label for="journey">Hành trình tour( Chọn lần lượt từng địa điểm):</label><br />
                                <input type="checkbox" name="changeJourney" id="changeJourney" />
                                <label for="editJourney">Chỉnh sửa hành trình tour</label>
                                <textarea class="form-control" readonly>
                                <?php
                                    $journey = "";
                                    $placeIdList = explode('-', $tours->journey);
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
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Lịch trình <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="schedule" value="{{$tours->schedule}}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ghi Chú<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="note" value="{{$tours->note}}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tổng Quan: <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="overview" value="{{$tours->overview}}" class="form-control" required/>
                                </div>

                            </div>
                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit" >Sửa</button>
                                        <button type="reset" class="btn btn-default">Hủy</button>
                                    </div>
                                </div>
                            </footer>
                    </section>
                </form>
            </div>
        </div>
        <!-- end: page -->
    </section>
    </div>
@endsection