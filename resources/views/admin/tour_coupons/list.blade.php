

@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Danh sách tour hóa đơn </h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tables</span></li>
                    <li><span>Danh sách tour hóa dơn  </span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Danh sách tour hóa dơn </h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <h2 class="panel-title text-center">Danh sách  tour hóa dơn </h2>
                    <br/>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Mã khách hàng</th>
                            <th>Mã tour du lịch</th>
                            <th>Mã dịch vụ</th>
                            <th>Số lượng khách hàng trẻ em </th>
                            <th> Số lượng khách hàng người lớn</th>
                            <th> Giá </th>
                            <th> lịch sử đơn hàng </th>
                            <th> Thời gian tour được đặt online</th>
                            <th>Trạng thái dơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tour_coupons as $coupons)
                            <tr class="gradeX">
                                {{--<td>{{$tour->tour_id}}</td>--}}
                                <td>{{$coupons->tour_coupon_id}}</td>
                                <td>{{$coupons->customer_id}}</td>
                                <td>{{$coupons->tour_id}}</td>
                                <td>{{$coupons->service_id}}</td>
                                <td>{{$coupons->childern_number}}</td>
                                <td>{{$coupons->adult_number}}</td>
                                <td>{{$coupons->price}}

                                </td>
                                <td>{{$coupons->history_id}}</td>
                                <td>{{$coupons->created_tour_date}}</td>
                                <td>{{$coupons->status}}</td>

                                <td class="actions">
                                    {{--<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>--}}
                                    {{--<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>--}}
                                    <a href="edit/{{$coupons->tour_coupon_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Thêm</button>
                        <button type="reset" class="btn btn-default">Hủy</button>
                    </div>
                </div>
            </footer>
        </section>
        <!-- end: page -->
    </section>


@endsection