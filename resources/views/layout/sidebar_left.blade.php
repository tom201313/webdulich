

<aside class="col-sm-pull-9 col-sm-3">
    <div class="box">
        <h3>Tìm tour du lịch</h3>
        <form class="form-horizontal" action="" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
                <div class="col-sm-12">
                    <label>Bạn muốn du lịch đến</label>
                    @if(isset($places))
                    <select class="form-control">
                        @foreach($places as $place)
                            <option value="{{$place->place_id}}">{{$place->place_name}}</option>
                        @endforeach
                        {{--<option>Hà Nội</option>--}}
                        {{--<option>Đà Nẵng</option>--}}
                        {{--<option>Tp. Hồ Chí Minh</option>--}}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Khởi hành từ</label>
                    {{--@if(isset($startPlaces))--}}
                        <select class="form-control" name="startPlace">
                            @foreach($startPlaces as $place)
                                <option value="{{$place->start_place}}">{{$place->start_place}}</option>
                            @endforeach
                        </select>
                    {{--@endif--}}
                    {{--<select class="form-control">--}}

                        {{--<option>Hà Nội</option>--}}
                        {{--<option>Đà Nẵng</option>--}}
                        {{--<option>Tp. Hồ Chí Minh</option>--}}
                    {{--</select>--}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Ngày khởi hành</label>
                    <select class="form-control" name="startTimeTour">
                        @foreach($startTimeTours as $startTime)
                            <option value="{{$startTime->begin_time}}">{{$startTime->begin_time}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn_submit">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
    <div class="find_near">
        <a href="findnear.php"><img src="<?php getUrlThemeActive();?>admin/images/findnear.jpg" alt="" class="img-responsive"/></a>
    </div>
    <div class="box box_border">
        <h3>Tiêu chí tìm tour</h3>
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Chọn loại tour</label>
                    <select class="form-control">
                        <option>Loại tour</option>
                        <option>Tour đoàn thể</option>
                        <option>Tour gia đình</option>
                        <option>Tour chuyên đề</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="amount">Chọn khoảng giá</label>
                    <input type="text" id="amount" readonly>
                    <div id="slider-range"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Chọn đánh giá</label>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="5 sao"></label>

                        <input type="radio" id="star4half" name="rating" value="4.5" />
                        <label class="half" for="star4half" title="4.5 sao"></label>

                        <input type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="4 sao"></label>

                        <input type="radio" id="star3half" name="rating" value="3.5" />
                        <label class="half" for="star3half" title="3.5 sao"></label>

                        <input type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="3 sao"></label>

                        <input type="radio" id="star2half" name="rating" value="2.5" />
                        <label class="half" for="star2half" title="2.5 sao"></label>

                        <input type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="2 sao"></label>

                        <input type="radio" id="star1half" name="rating" value="1.5" />
                        <label class="half" for="star1half" title="1.5 sao"></label>

                        <input type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="1 star"></label>

                        <input type="radio" id="starhalf" name="rating" value="half" />
                        <label class="half" for="starhalf" title="0.5 sao"></label>
                    </fieldset>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Chọn dịch vụ</label>
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
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn_submit btn_filter">Lọc kết quả</button>
                </div>
            </div>
        </form>
    </div>
</aside>


