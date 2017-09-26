

@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Trang cá nhân</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>Trang cá nhân</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->

        <div class="row">
            <div class="tabs">
                <ul class="nav nav-tabs tabs-primary">
                    <li class="active">
                        <a href="#overview" data-toggle="tab">Thông tin người dùng</a>
                    </li>
                    <li>
                        <a href="#edit" data-toggle="tab">Sửa thông tin cá nhân</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="overview" class="tab-pane active">
                        <h4 class="mb-md">Thông tin hiện tại</h4>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">First Name</label>
                                <div class="col-md-8">
                                    <label>Quá</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileLastName">Last Name</label>
                                <div class="col-md-8">
                                    <label>Dương</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileAddress">Address</label>
                                <div class="col-md-8">
                                    <label>Hành tẩu giang hồ, 4 bể là nhà</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileCompany">Email</label>
                                <div class="col-md-8">
                                    <label>thandieudaihiep@quanhi.com</label>
                                </div>
                            </div>
                        </fieldset>
                        <hr class="dotted tall">
                        <h4 class="mb-xlg">Giới thiệu</h4>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileBio">Vài nét về bản thân</label>
                                <div class="col-md-8">
                                    <p>Dương Quá, là con trai duy nhất của Dương Khang (Hoàn Nhan Khang) và Mục Niệm Từ, dòng dõi Dương Tái Hưng thời Nam Tống. Tên của chàng là do Quách Tĩnh đặt, vì khi chàng ra đời thì Dương Khang đã chết, với mong muốn khi lớn lên chàng sẽ sửa lại các sai lầm của cha. Chàng được mô tả là người có chân mày tỏa ra khí khái bất phàm, cặp mắt sáng ngời, tính tình thì thông minh, cổ quái, có nhiều mưu mẹo nhưng cũng không giấu được bản sắc anh hùng. </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-3 control-label mt-xs pt-none">Công khai</label>
                                <div class="col-md-8">
                                    <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                                        <input type="checkbox" checked="" id="profilePublic">
                                        <label for="profilePublic"></label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                    <div id="edit" class="tab-pane">
                        <form class="form-horizontal" method="get">
                            <h4 class="mb-xlg">Thông tin cá nhân</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileFirstName">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileFirstName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileLastName">Last Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileLastName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileAddress">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileAddress">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileEmail">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" id="profileEmail">
                                    </div>
                                </div>
                            </fieldset>
                            <hr class="dotted tall">
                            <h4 class="mb-xlg">Giới thiệu</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileBio">Vài nét về bản thân</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3" id="profileBio"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label mt-xs pt-none">Công khai</label>
                                    <div class="col-md-8">
                                        <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                                            <input type="checkbox" checked="" id="profilePublic">
                                            <label for="profilePublic"></label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <hr class="dotted tall">
                            <h4 class="mb-xlg">Đổi mật khẩu</h4>
                            <fieldset class="mb-xl">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileOldPassword">Mật khẩu</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileOldPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileNewPassword">Mật khẩu mới</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileNewPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Nhập lại mật khẩu mới</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileNewPasswordRepeat">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                                        <button type="reset" class="btn btn-default">Hủy bỏ</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: page -->
    </section>
    </div>

    @endsection