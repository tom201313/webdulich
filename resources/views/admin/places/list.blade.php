@extends('admin.index')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>List Places</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Places</span></li>
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

                <h2 class="panel-title">List Places</h2>
            </header>
            <div class="panel-body">
                <div class="row" style="margin-bottom: 1em;">
                </div>
                <br/>
                <div class="row" style="margin-bottom: 1em;">
                    <form class="form-inline text-left col-md-12" role="form">
                        <div class="form-group">
                            <a href="{{asset('admin/places/add')}}" class="btn btn-primary btn-sm">Add Places</a>
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
                            <th>Place Name</th>
                            <th>Description</th>
                            <th>Parent</th>
                            <th>Image</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($places as $place)
                            <tr class="gradeX">
                                <td>{{$place->place_id}}</td>
                                <td>{{$place->place_name}}</td>
                                <td>m{{$place->description}}</td>
                                <td>
                                    @if($place->place_id == 0)
                                        <option>None</option>
                                        @endif
                                    @foreach($places as $placeParent)
                                        @if($place->parent_id == $placeParent->place_id)
                                            {{$placeParent->place_name}}
                                            @break
                                            @endif
                                    @endforeach
                                </td>
                                <td>{{$place->image}}</td>

                                {{--<td>--}}

                                    {{--@if($place->parent_id ==0)--}}
                                     {{--<div class="alert alert-warning">--}}
                                         {{--<span>None</span>--}}
                                     {{--</div>--}}
                                        {{--@else--}}
                                     {{--@foreach($place as $placeParent)--}}
                                         {{--@if($place->$place_id == $placeParent->$place_id)--}}
                                             {{--{{$placeParent->place_name}}--}}
                                            {{--@endif--}}
                                    {{--@endforeach--}}
                                        {{--@endif--}}

                                {{--</td>--}}
                                <td class="actions">

                                    <a href="edit/{{$place->place_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="delete/{{$place->place_id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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