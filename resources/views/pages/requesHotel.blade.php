
@extends('layout.index')
@section('content')
    <form class="form-horizontal" action="" method="POST">
        <div class="col-sm-6">
            <h2 class="page_title">Thông tin người dùng</h2></h2>
            <div class="form-group">
                <label class="col-sm-3">Họ và tên *</label>
                <div class="col-sm-9">
                    <input type="text" name="fullName" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Số điện thoại *</label>
                <div class="col-sm-9">
                    <input type="number" name="fone" min="0" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="mail" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Chủ đề</label>
                <div class="col-sm-9">
                    <select class="form-control" disabled="disabled">
                        <option>Yêu cầu báo giá</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Ngày đến *</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="datepicker1" name="arrive_request" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Ngày đi *</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="datepicker2" name="leave_request" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Nội dung yêu cầu</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Mã xác nhận *</label>
                <div class="col-sm-9">
                    <div class="captcha_code">
                        <div class="show_captchatext">219148</div>
                        <div class="input_captchatext">
                            <input type="text" class="form-control" name="captcha" required="" placeholder="Nhập mã xác nhận">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <h2 class="page_title">Tiêu chí yêu cầu</h2>
            <div class="form-group">
                <label class="col-sm-3">Chọn tỉnh/thành</label>
                <div class="col-sm-9">
                    <select class="form-control">
                        <option>Hà Nội</option>
                        <option>Đà Nẵng</option>
                        <option>Tp. Hồ Chí Minh</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Chọn quận/huyện</label>
                <div class="col-sm-9">
                    <select class="form-control">
                        <option>Quận 1</option>
                        <option>Quận 2</option>
                        <option>Quận 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Khoảng giá</label>
                <div class="col-sm-9">
                    <input type="text" id="amount" readonly>
                    <div id="slider-range"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Tiện nghi</label>
                <div class="col-sm-9">
                    <div id="ultilites">
                        <div class="checkbox checkbox-success">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">Internet - Wifi miễn phí</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox2" type="checkbox">
                            <label for="checkbox2">Điều hòa</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox3" type="checkbox">
                            <label for="checkbox3">Tivi</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox4" type="checkbox">
                            <label for="checkbox4">Thang máy</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox5" type="checkbox">
                            <label for="checkbox5">Bãi đỗ xe</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox6" type="checkbox">
                            <label for="checkbox6">Bar mini</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox7" type="checkbox">
                            <label for="checkbox7">Tủ lạnh</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox8" type="checkbox">
                            <label for="checkbox8">Bình nóng lạnh</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox9" type="checkbox">
                            <label for="checkbox9">Máy sấy tóc</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox10" type="checkbox">
                            <label for="checkbox10">Tủ quần áo</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox11" type="checkbox">
                            <label for="checkbox11">Giặt là</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox12" type="checkbox">
                            <label for="checkbox12">Bể bơi ngoài trời</label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox13" type="checkbox">
                            <label for="checkbox13">Bồn tắm</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 text-center" style="margin-top: 20px;">
            <div class="form-group">
                <button type="submit" class="btn btn_submit">Gửi yêu cầu báo giá</button>
            </div>
        </div>
    </form>

    @endsection