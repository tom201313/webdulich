
@extends('layout.index')
@section('content')
    <div class="col-sm-12 login">
        <h2 class="page_title">Đăng ký tài khoản</h2>
        <div class="contact">
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
            <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label class="col-sm-3">Họ và tên *</label>
                    <div class="col-sm-9">
                        <input type="text" name="customer_name" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">DOB *</label>
                    <div class="col-sm-9">
                        <input type="date" name="dob" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 ">Gender: <span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="radio" name="gender" value="1"  required/> Nam
                        <input type="radio" name="gender" value="2" required/> Nữ
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Số điện thoại *</label>
                    <div class="col-sm-9">
                        <input type="text" name="phoneNumber" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Email *</label>
                    <div class="col-sm-9">
                        <input type="text" name="email" class="form-control" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3">Mật khẩu *</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Nhập lại mật khẩu *</label>
                    <div class="col-sm-9">
                        <input type="password" name="re_password" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 ">Address: <span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn_submit">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection