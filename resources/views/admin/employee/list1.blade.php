
@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Danh sách nhân viên</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tables</span></li>
                    <li><span>Danh sách nhân viên</span></li>
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

                <h2 class="panel-title">Danh sách nhân viên</h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-md">
                            <button id="addToTable" class="btn btn-primary">Thêm <i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ và tên</th>
                        <th>Chức vụ</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nhân viên</td>
                        <td class="actions">
                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    {{--<tr class="gradeC">--}}
                        {{--<td>2</td>--}}
                        {{--<td>Nguyễn Văn B</td>--}}
                        {{--<td>Nhân viên</td>--}}
                        {{--<td class="actions">--}}
                            {{--<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>--}}
                            {{--<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>--}}
                            {{--<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>--}}
                            {{--<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr class="gradeA">--}}
                        {{--<td>3</td>--}}
                        {{--<td>Nguyễn Văn C</td>--}}
                        {{--<td>Quản lý</td>--}}
                        {{--<td class="actions">--}}
                            {{--<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>--}}
                            {{--<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>--}}
                            {{--<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>--}}
                            {{--<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    </tbody>
                </table>
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