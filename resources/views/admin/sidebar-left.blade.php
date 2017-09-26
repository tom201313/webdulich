<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Menu
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li>
                            <a href="{{asset('admin/pages/index')}}">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="nav-parent nav-expanded nav-active">
                            <a>
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Cài đặt chung</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="nav-active">
                                    <a href="pages.hoteldiagram">Sơ đồ khách sạn</a>
                                </li>
                                {{--{{assert('admin.pages.hoteldiagram')}}--}}
                                {{--<li>--}}
                                    {{--<a href="lists-hotel.php">Danh sách khách sạn</a>--}}
                                {{--</li>                               --}}
                                {{--<li>--}}
                                    {{--<a href="lists-floor.php">Danh sách tầng</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="lists-typeofrooms.php">Danh sách loại phòng</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="lists-bookroom.php">Danh sách phòng đã đặt</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="addnewroom.php">Thêm phòng</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="check-in.php">Nhận phòng</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="check-out.php">Trả phòng</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="addmerchandisetoroom.php">Thêm hàng hóa cho phòng</a>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Tour</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/tour/list')}}">Danh sách tour du lịch</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/tour/add')}}">Thêm tour du lịch </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Tour Ảnh</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/tour_images/list2')}}">Danh sách tour ảnh2</a>
                                    <a href="{{asset('admin/tour_images/list')}}">Danh sách tour ảnh</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/tour_images/add')}}">Thêm tour ảnh </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>cho</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/cho/list')}}">Danh sách tour ảnh</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/cho/add')}}">Thêm tour ảnh </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span> Hóa Đơn </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/tour_coupons/list')}}">Danh sách hóa đơn</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/tour_coupons/add')}}">Thêm hóa dơn </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Khuyến mại</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/discount_code/list')}}">Danh sách khuyến mại</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/discount_code/add')}}">Thêm khuyến mại</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Dịch vụ </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/services/list')}}">Danh sách dịch vụ</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/services/add')}}">Thêm dịch vụ</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span> Địa Danh  </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/places/list')}}">Danh sách đia danh </a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/places/add')}}">Thêm địa danh </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span>Phương Tiện </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/vehicles/list')}}">Danh sách phương tiện</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/vehicles/add')}}">Thêm phương tiện</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <span>Nhân viên </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a href="{{asset('admin/employee/list')}}">Danh sách nhân viên </a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/employee/add')}}">Thêm nhân viên </a>
                                </li>

                            </ul>
                        </li>
                        {{--<li>--}}
                            {{--<a href="{{asset('admin/employee/add')}}">--}}
                                {{--<i class="fa fa-suitcase" aria-hidden="true"></i>--}}
                                {{--<span>Nhân viên </span>--}}
                            {{--</a>                          --}}
                        {{--</li>                        --}}
                        {{--<li>--}}
                            {{--<a href="lists-dayoff.php">--}}
                                {{--<i class="fa fa-calendar" aria-hidden="true"></i>--}}
                                {{--<span>Ngày lễ</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{asset('admin/services/add')}}">--}}
                                {{--<i class="fa fa-users" aria-hidden="true"></i>--}}
                                {{--<span>Dịch vụ </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class="nav-parent">
                            <a>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>Quản lý thu/chi</span>
                            </a>
                            <ul class="nav nav-children">
                                <li class="nav-parent">
                                    <a>Quản lý thu</a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="lists-receipts.php">Danh sách phiếu thu</a>
                                        </li>
                                        <li>
                                            <a href="addnewreceipts.php">Thêm phiếu thu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>Quản lý chi</a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="lists-paymentvoucher.php">Danh sách phiếu chi</a>
                                        </li>
                                        <li>
                                            <a href="addnewpaymentvoucher.php">Thêm phiếu chi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="liabilities.php">
                                <i class="fa  fa-fax" aria-hidden="true"></i>
                                <span>Quản lý công nợ</span>
                            </a>
                        </li>
                        <li>
                            <a href="revenue.php">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <span>Doanh thu</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </aside>
    <!-- end: sidebar -->