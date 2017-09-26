

@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Images</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Add Images Tour: {{$tours->tour_name}}</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->

        <div class="row">
            <div class="col-md-12">
                {{--thoong bao loi--}}
                @if (count($errors) > 0 )
                    <div class="alert alerrors->all() as $rt-danger">
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

                {{--end: thong bao loi--}}

                {{--form nhập ảnh--}}
                <form id="summary-form" action="{{asset(route('postAddTourImage'))}}" method="POST" class="form-horizontal">

                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Add Images Tour: {{$tours->tour_name}}</h2>
                        </header>
                        <div class="panel-body">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}" >
                            <input type="hidden" name="tourId" value="{{$tours->tour_id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Upload Image:<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <?php
                                    showUploadFile('uploadfile', 'uploadfile','','0');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit" >Thêm</button>
                                <button type="reset" class="btn btn-default">Hủy</button>
                            </div>
                        </div>
                    </footer>
                </form>
                {{--end: form thêm ảnh--}}

            </div>
        </div>
        <!-- end: page -->
    </section>
    </div>
@endsection
