
@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Employees</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('admin/employee/list')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Quản lý nhân viên </span></li>
                    <li><span>Add Employees </span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

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
            <form id="summary-form" action="" enctype="multipart/form-data"  method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Add Employees</h2>
                    </header>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Employee name:<span class="required">*</span> </label>
                            <div class="col-md-6">
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon">--}}
                                        {{--<i class="fa fa-clock-o"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>--}}
                                    {{--<span class="input-group-addon">phút, ngày</span>--}}
                                    {{--<span class="input-group-addon">--}}
                                        {{--<i class="fa fa-calendar"></i>--}}
                                    {{--</span>--}}
                                    <input type="text" name="employee_name" class="form-control" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password: <span class="required">*</span></label>
                            <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" required/>
                        </div>
                        </div>
                    <div class="form-group">
                         <label class="col-sm-3 control-label">Nhạp lại Password: <span class="required">*</span> </label>
                        <div class="col-sm-6">
                        <input  type="password" class="form-control" name="re_password" required placeholder="Please Enter Category passwrod" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Level</label>

                        <div class="col-sm-6">
                            Admin:<input type="radio" name="level" value="1"  required />
                            Nhân viên<input type="radio" name="level" value="2"  required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">dob: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="date" name="dob" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gender: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="radio" name="gender" value="1"  required/> Nam
                            <input type="radio" name="gender" value="2" required/> Nữ
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone_number:<span class="required">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" name="phone_number" class="form-control" />
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Address: <span class="required">*</span></label>
                        <div class="col-sm-6">
                            <input type="text" name="address" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Avatar: </label>
                        <?php
                            showUploadFile('uploadfile', 'uploadfile','', 0);
                        ?>
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