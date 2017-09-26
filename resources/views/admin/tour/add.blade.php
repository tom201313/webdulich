
@extends ('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Tour</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Add Tour</span></li>
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

                            <h2 class="panel-title">Add Tour</h2>
                        </header>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tên Tour<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="tentour" id="tentour" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Giá Tour<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" name="base_prices" id="base_prices" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Giá Tour Khuyến mãi<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" name="sale_prices" id="sale_price" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Mã Khuyến mãi<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="discountcode" id="discountcode">

                                            @foreach($discount_code as $discountcode)
                                             <option value="{{$discountcode->discount_code_id}}">
                                                {{$discountcode->discount_code_name}} &nbsp;&nbsp;&nbsp;
                                                 (Trị giá:{{$discountcode->money}} đồng)
                                             </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-3 control-label">Nội Dung<span class="required">*</span></label>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<textarea name="content" class="form-control" required></textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Thời gian khởi hành <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="date" name="begin_time" id="begin_time" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Thời gian diễn ra<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="duration" id="duration" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">Hình ảnh:</label><br />
                                <?php showUploadFile('image', 'image', '', 3);?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Phương tiện<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="vehicle[]" id="vehicle">
                                        @foreach($vehicles as $vh)
                                            <option
                                                value="{{$vh->vehicle_id}}">
                                                {{$vh->vehicle_name}}
                                            </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">số lượng khách tối đa<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="max_customer_number" id="max_customer_number" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Điểm xuất phát <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="start_place" id="start_place" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Hành tình Tour<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <select type="text" name="journey[]"  class="form-control" multiple >
                                     <option disabled>Chọn danh sách địa diểm </option>
                                        <?php
                                        cate_parent($places); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="schedule">Mô tả lịch trình tour <span class="required">*</span></label>
                                <div class="col-sm-6 ">
                                <textarea class="form-control" cols="5" rows="15"  name="schedule" id="schedule"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ghi Chú<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text"  name="note" id="note" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Tổng Quan: <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    {{--<input type="text" name="overview" class="form-control" required/>--}}
                                    <?php showEditorInput("overview", "overview", "", "ckeditor"); ?>

                                </div>

                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" >Thêm</button>
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