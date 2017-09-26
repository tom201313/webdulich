
@extends('layout.index')
@section('content')
    <article class="col-sm-push-3 col-sm-9">
        <h2 class="page_title">Liên hệ với chúng tôi</h2>
        <div class="contact">
            <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label class="col-sm-3">Họ và tên *</label>
                    <div class="col-sm-9">
                        <input type="text" name="fullName" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="mail" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Số điện thoại *</label>
                    <div class="col-sm-9">
                        <input type="number" name="fone" min="0" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Chủ đề</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                            <option>Liên hệ - Góp ý</option>
                            <option>Thông tin đặt phòng</option>
                            <option>Đối tác doanh nghiệp</option>
                            <option>Đối tác quảng cáo</option>
                            <option>Đối tác Nhà nghỉ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Nội dung *</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="5" required></textarea>
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
                            <button type="submit" class="btn btn_submit">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </article>
@endsection