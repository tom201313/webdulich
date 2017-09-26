
@extends('layout.index')
@section('content')
<div class="col-sm-12 login">
    <h2 class="page_title">Đăng nhập tài khoản</h2>
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
        <form class="form-horizontal" action="login" method="POST">
            <input type ="hidden" name ="_token" value ="{{csrf_token()}}">
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
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <a href="repassword.php"><small>Quên mật khẩu?</small></a>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn_submit">Đăng nhập</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection