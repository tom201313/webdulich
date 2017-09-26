
@extends('layout.index')

@section('content')
    <article class="col-sm-push-3 col-sm-9">
        <h1 class="show_listHotel">Tin tức</h1>
        <div class="viewNews">
            <h2>Khai trương Khách sạn Blue Wave tại biển Cửa Lò</h2>
            <p>Ngày 24/4/2017 tại Thị xã Cửa Lò, Công ty TNHH Blue Sea chính thức khai trương Khách sạn Blue Wave Cửa Lò. Blue Wave hotel cao 15 tầng với tổng số 108 phòng nghỉ nội thất sang trọng, hiện đại tại vị trí Đường Hoàng Văn Tâm, Phường Nghi Hương, Tx Cửa Lò, tỉnh Nghệ An</p>
            <p>Khách sạn Blue Wave tọa lạc ở vị trí trung tâm khu du lịch Cửa Lò, đối diện với Quảng trường Bình Minh - Trung tâm văn hóa, lễ hội của Thị xã. Được thiết kế và xây dựng theo tiêu chuẩn quốc tế 3 sao, gồm 15 tầng với tổng số 108 phòng nghỉ nội thất sang trọng, hiện đại. Hệ thống nhà hàng có sức chứa lên đến 600 khách  cùng các dịch vụ hoàn hảo ... góp phần tạo điểm nhấn cho du lịch Cửa Lò.</p>
            <img src="<?php getUrlThemeActive()?>admin/images/vn.jpg" class="img-responsive" alt=""/>
            <br/>
            <strong>
                Liên hệ đặt phòng khách sạn Blue Wave <br/>
                Đường Hoàng Văn Tâm , Phường Nghi Hương , TX cửa lò , Nghệ An <br/>
                Hotline: 0913.292.121 <br/>
                Lễ tân:  0238.871.6666 ;  0238.871.8666 <br/>
                E: info@bluewavehotel.com.vn <br/>
            </strong>
        </div>
        <hr/>
        <div class="relateNews">
            <h3>Tin tức liên quan</h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="item-service">
                        <figure class="image_service">
                            <img src="<?php getUrlThemeActive()?>admin/images/hotel1.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </figcaption>
                            <a href="{{asset('viewNews')}}"></a>
                        </figure>
                        <h2><a href="{{asset('viewNews')}}" title="">Khách sạn khuyến mãi giảm giá, Khách sạn Giá rẻ tại Hưng Yên</a></h2>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item-service">
                        <figure class="image_service">
                            <img src="<?php getUrlThemeActive()?>admin/images/hotel1.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </figcaption>
                            <a href="viewNews.php"></a>
                        </figure>
                        <h2><a href="viewNews.php" title="">Kinh nghiệm tìm và đặt phòng khách sạn ở Ninh Bình</a></h2>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="item-service">
                        <figure class="image_service">
                            <img src="<?php getUrlThemeActive()?>admin/images/hotel1.jpg" alt="" class="img-responsive">
                            <figcaption>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </figcaption>
                            <a href="viewNews.php"></a>
                        </figure>
                        <h2><a href="viewNews.php" title="">Giải pháp phát triển ngành du lịch trên nền tảng di động</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </article>

    @endsection