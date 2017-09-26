@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Places</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Add Places</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->

        <div class="row">
            <div class="col-md-12">
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
                <form id="summary-form" action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>

                            <h2 class="panel-title">Add Places</h2>
                        </header>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Places Name<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="place_name" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description<span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="description" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Image: <span class="required">*</span></label>
                                <?php
                                showUploadFile('uploadfile', 'uploadfile','', 0);
                                ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Parent<span class="required">*</span></label>
                                <div class="col-sm-6">
                                        <select name="parent_id" id="parent">
                                            <option>None</option>
                                            @foreach($places as $place)
                                                <option value="{{$place->place_id}}">{{$place->place_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" >Thêm</button>
                                    <button type="reset" class="btn btn-default">Hủy</button>
                                </div>
                            </div>
                        </footer>
                    </section>
                </form>
            </div>
        </div>
        <!-- end: page -->
    </section>
    </div>
@endsection