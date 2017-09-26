@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>List Services</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Services</span></li>
                    <li><span>List</span></li>
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

                <h2 class="panel-title">List Services</h2>
            </header>
            <div class="panel-body">
                <div class="row" style="margin-bottom: 1em;">
                </div>
                <br/>
                <div class="row" style="margin-bottom: 1em;">
                    <form class="form-inline text-left col-md-12" role="form">
                        <div class="form-group">
                            <a href="{{asset('admin/vehicles/add')}}" class="btn btn-primary btn-sm">Add Services</a>
                        </div>
                    </form>
                </div>
                <br/>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-none" id="">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>vehicles Name</th>
                            <th>vehicle_Image</th>
                            <th>hành động </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehicles as $vh)
                            <tr class="gradeX">
                                <td>{{$vh->vehicle_id}}</td>
                                <td>{{$vh->vehicle_name}}</td>
                                <td>{{$vh->vehicle_image}}</td>
                                <td class="actions">
                                    <a href="edit/{{$vh->vehicle_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="delete/{{$vh->vehicle_id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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

@endsection