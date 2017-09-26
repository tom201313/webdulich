
@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ảnh tour '{{$tours->tour_name}}'
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>STT</th>
                    <th>Ảnh</th>
                    <!-- <th>Đường dẫn</th> -->
                    <th>Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                @foreach($tour_images as $image)
                    <tr align="center">
                        <td>{{$i}}</td>
                        <td>
                            <img src="{{$image->image}}" height="160px" width="220px"/>
                        </td>
                    {{--<!-- <td>--}}
                            {{--{{$image->image}}--}}
                            {{--</td> -->--}}

                        <td class="center">
                            <a href="{{asset(route('deleteImage', ['imageId' => $image->image_id, 'tourId' => $tours->tour_id]))}}"><i class="fa fa-trash-o  fa-fw"></i></a>
                        </td>
                    </tr>
                    <?php ++$i; ?>
                @endforeach
                </tbody>
            </table>
            <br />
            <hr size="2px">
            <!-- thông báo lỗi-->
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('noti'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{session('noti')}}</li>
                    </ul>
                </div>
        @endif
        <!-- end: thông báo lỗi-->
            <form action="{{asset(route('postAddTourImage'))}}" method="POST" enctype="multipart/form-data" class="form-control">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="idTour" id="idTour" value="{{$tours->tour_id}}"/>
                <?php showUploadFile('imageTour', 'imageTour[]', '', 2);?>

                <input type="submit" class="btn btn-primary" value="Thêm ảnh"/><br />
            </form>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>

    @endsection