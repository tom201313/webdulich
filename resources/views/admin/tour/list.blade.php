

@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Danh sách tour du lịch</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tables</span></li>
                    <li><span>Danh sách tour du lịch </span></li>
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

                <h2 class="panel-title">Danh sách tour du lịch </h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <h2 class="panel-title text-center">Danh sách  tour du lich </h2>
                    <br/>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tour</th>
                            <th>Giá tour</th>
                            <th>Giá tour khuyến mãi</th>
                            <th>Mã giảm giá</th>
                            <th>Mô tả</th>
                            <th> Thời gian khởi hành</th>
                            <th> Thời gian diễn ra</th>
                            <th> Phương tiên</th>
                            <th> Số khách tối đa</th>
                            <th> Đại điểm xuất phát </th>
                            <th> Hành hình tour</th>
                            <th> Lịch trình chi tiết </th>
                            <th>Ghi chú</th>
                            <th>Tổng Quát</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tours as $tour)
                            <tr class="gradeX">
                                <td>{{$tour->tour_id}}</td>
                                <td>{{$tour->tour_name}}</td>
                                <td>{{$tour->base_prices}}</td>
                                <td>{{$tour->sale_prices}}</td>
                                <td>
                                    @foreach($discount_code as $discountcode)

                                                @if($discountcode->discount_code_id == $tour->discount_code_id )
                                                   {{$discountcode->discount_code_name}}
                                                @endif
                                     @endforeach


                                </td>

                                <td>{{$tour->content}}</td>
                                <td>{{$tour->begin_time}}</td>
                                <td>{{$tour->duration}}</td>

                                <td>
                                    {{--{{$tour->vehicle_id}}--}}
                                  <?php
                                $vehicle = $tour->vehicle_id;
                                $vehicleList = explode('-', $vehicle);
                                   $vehicleTour = "";
                                   foreach($vehicleList as $vehicleId) {
                                      foreach($vehicles as $vhc) {
                                            if($vhc->vehicle_id == $vehicleId) {
                                               $vehicleTour .= $vhc->vehicle_name.'-';
                                            }
                                       }
                                    }
                                   //loại bỏ ký tự '-' cuối cùng trong chuỗi

                                    echo substr($vehicleTour,0,-1);
                                    ?>
                                </td>
                                <td>{{$tour->max_customer_number}}</td>
                                <td>{{$tour->start_place}}</td>
                                <td>
                                    {{--{{$tour->journey}}--}}
                                    <?php
                                    $journey = $tour->journey;//có dạng list các id của các place
                                    $placeList = explode('-', $journey);
                                    $journeyTour = "";
                                    foreach($placeList as $placeId) {
                                        foreach($places as $place) {
                                            if($place->place_id == $placeId) {
                                                $journeyTour .= $place->place_name.'-';
                                            }
                                        }
                                    }
                                    //loại bỏ ký tự '-' cuối cùng trong chuỗi
                                    echo substr($journeyTour,0,-1);
                                    ?>
                                </td>
                                <td>{{$tour->schedule}}</td>
                                <td>{{$tour->note}}</td>
                                <td>{{$tour->overview}}</td>

                                <td class="actions">
                                    {{--<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>--}}
                                    {{--<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>--}}
                                    <a href="edit/{{$tour->tour_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="delete/{{$tour->tour_id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                    <a href="{{asset(route('listTourImage', ['id' => $tour->tour_id]))}}"><i class="fa fa-picture-o fa-fw"></i></a>
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