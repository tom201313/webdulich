@extends('admin.index')
@section('content')
 <section role="main" class="content-body">
    <header class="page-header">
        <h2>Danh sách khuyến mại</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Khuyến mại</span></li>
                <li><span>Danh sách khuyến mại</span></li>
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

            <h2 class="panel-title">Danh sách khuyến mại</h2>
        </header>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
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
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên mã giảm giá</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Trị giá khuyến mại</th>
                        <th>employee</th>
                        {{--<th>Nội dung khuyến mại</th>--}}
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($discount_code as $discountcode)
                    <tr class="gradeX">
                        <td>{{$discountcode->discount_code_id}}</td>
                        <td>{{$discountcode->discount_code_name}}</td>
                        <td>
                            <?php
                            $start_date = getdate($discountcode->start_date);
                            echo  $start_date["mday"].'/'.$start_date["mon"].'/'.$start_date["year"];
//                            var_dump($start_date)
                            ?>
                        </td>
                        <td>
                            <?php
                            $end_date = getdate($discountcode->end_date);
                            echo  $end_date["mday"].'/'.$end_date["mon"].'/'.$end_date["year"];
//                            var_dump($end_date);
                            ?>

                        </td>
                        <td>{{$discountcode->money}}</td>
                        <td>{{$discountcode->employee_id}}</td>

                        <td></td>
                        <td class="actions">
                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                            <a href="edit/{{$discountcode->discount_code_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="delete/{{$discountcode->discount_code_id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- end: page -->
</section>
</div>
<div id="dialog" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Bạn có chắc?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>Bạn có chắc muốn xóa dòng này?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="dialogConfirm" class="btn btn-primary">Xóa</button>
                    <button id="dialogCancel" class="btn btn-default">Hủy</button>
                </div>
            </div>
        </footer>
    </section>
</div>
@endsection
