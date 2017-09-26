@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Thêm mới khuyến mại</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Khuyến mại</span></li>
                    <li><span>Thêm khuyến mại</span></li>
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
                <form id="summary-form" action="" class="form-horizontal" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Thêm mới khuyến mại</h2>
                        </header>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <lable class="col-sm-4 control-label">Mã khuyến mại:</lable>
                                    <div class="col-sm-8">
                                        <input type="text" name="discount_code_name" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-sm-4 control-label">Trị giá khuyến mại:</lable>
                                    <div class="col-sm-8">
                                        <input type="number" name="money" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-sm-4 control-label">Mã Nhân viên :</lable>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="vehicle" id="vehicle">
                                            @foreach($employee as $em)
                                                <option
                                                        value="{{$em->employee_id}}">
                                                    {{$em->employee_id}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-sm-4 control-label">Giờ bắt đầu:</label>--}}
                                    {{--<div class="col-sm-8">--}}
                                        {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon">--}}
                                            {{--<i class="fa fa-clock-o"></i>--}}
                                        {{--</span>--}}
                                            {{--<input type="text" name="start_date" data-plugin-timepicker class="form-control">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-sm-4 control-label">Giờ kết thúc:</label>--}}
                                    {{--<div class="col-sm-8">--}}
                                        {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon">--}}
                                            {{--<i class="fa fa-clock-o"></i>--}}
                                        {{--</span>--}}
                                            {{--<input type="text" name="end_date" data-plugin-timepicker class="form-control">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="start_date">Ngày bắt đầu:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar fa-clock-o"></i>
                                        </span>
                                            <input   type="datetime-local" name="start_date" data-plugin-datepicker class="form-control" required/>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label " for="end_date">Ngày kết thúc:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                        {{--<span class="input-group-addon">--}}
                                            {{--<i class="fa fa-calendar"></i>--}}
                                        {{--</span>--}}
                                            <input type="datetime-local" name="end_date" data-plugin-datepicker class="form-control" required/>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-sm-2 control-label">Nội dung khuyến mại:</label>--}}
                                    {{--<div class="col-sm-10">--}}
                                        {{--<textarea name="content" rows="5" class="form-control" placeholder="Nội dung khuyến mại"></textarea>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="text-center">
                                    <button class="btn btn-primary">Thêm</button>
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