
@extends('admin.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form id="summary-form" action="" class="form-horizontal" method="POST">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Thêm phiếu tour</h2>
                            </header>
                            <!--thông báo lỗi-->
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
                        <!--                    end: thông báo lỗi-->
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="name">Tên địa điểm: <span
                                                class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required name="name" id="name"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="parentplace">Thuộc khu vực: <span
                                                class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <select id="parentplace" class="form-control" name="parentplace" required>
                                            <option value="0">None</option>
                                            @foreach($places as $place)
                                                <option value="{{$place->place_id}}">{{$place->place_name}}</option>
                                            @endforeach
                                        </select>
                                        <label class="error" for="select"></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="description">Mô tả địa điểm: <span
                                                class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <?php showEditorInput('description', 'description', ''); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="image">Hình ảnh:</label>
                                    <div class="col-sm-6">
                                       <?php showUploadFile('uploadfile', 'uploadfile','', 0);?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <button class="btn btn-primary">Thêm</button>
                                        <button type="reset" class="btn btn-default">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
