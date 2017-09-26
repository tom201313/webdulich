
@extends('admin.index')
@section('content')

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Danh sách nhân viên</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{asset('admin/employee/add')}}">
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
                            <button id="addToTable" class="btn btn-primary">  <a href="{{asset('admin/employee/add')}}">Thêm</a> <i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>employee_name</th>
                        <th>level</th>
                        <th>dob</th>
                        <th>gender</th>
                        <th>phone_number</th>
                        <th>Email</th>
                        <th>Addres</th>
                        <th>avatar</th>

                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employee as $em)
                        <tr class="gradeX">
                            <td>{{$em->employee_id}}</td>
                            <td>{{$em->employee_name}} </td>
                            <td>{{$em->level}}</td>
                            {{--<td>--}}
                            {{--@if($em->level ==1)--}}
                            {{--{{Admin}}--}}
                            {{--@else--}}
                            {{--{{Thường}}--}}
                            {{--@endif--}}
                            {{--</td>--}}
                            <td>{{$em->dob}}</td>
                            <td>
                                {{--@if($em->gender == 1)--}}
                                    {{--{{nam}}--}}
                                    {{--@else--}}
                                {{--{{nu}}--}}
                               {{--@endif--}}
                                <?php if ($em->gender == 1) { echo 'Nam'; } else{
                                    echo 'Nữ';
                                } ?></td>
                            </td>

                            <td>{{$em->phone_number}}</td>
                            <td>{{$em->email}}</td>
                            <td>{{$em->address}}</td>
                            <td>{{$em->avart}}</td>


                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="edit/{{$em->employee_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="delete/{{$em->employee_id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>

                            </td>
                        </tr>
                    @endforeach

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