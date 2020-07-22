@extends('admin.layouts')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Баннеры</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Главное</a></li>
                <li class="active">Баннеры</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        @if(Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        
                        @if(Session::has('onDelete'))
                            <div class="alert alert-danger">{{ Session::get('onDelete') }}</div>
                        @endif
                        
                        <br/>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href="{{url('admin/add_banner')}}"
                               class="btn btn-info pull-right">
                                <i class="fa fa-plus"></i>Добавить Баннеры
                            </a>

                        </div>
                        <br/>
                        <br/>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <table id="example2" class="table table-bordered table-hover t-2">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Banners Name</th>
                                        <th>Types</th>
                                        <th>Pictures</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($banners as $banner)
                                    <tr>
                                        <td>{{$banner->id}}</td>
                                        <td>{{$banner->name}}</td>
                                        <td>{{$banner->types}}</td>
                                        <td>
                                        @if($banner->types=='slider')
                                        <img src="{{asset('images/slider/'. $banner->image)}}" alt="" width="150px" height="100px"/>
                                        @elseif($banner->types=='content')
                                        <img src="{{asset('images/content/'. $banner->image)}}" alt="" width="150px" height="100px"/>
                                        
                                        @elseif($banner->types=='footer')
                                        <img src="{{asset('images/footer/'. $banner->image)}}" alt="" width="150px" height="100px"/>
                                 
                                        @elseif($banner->types=='about_us')
                                        <img src="{{asset('images/about_us/'. $banner->image)}}" alt="" width="150px" height="100px"/>
                            
                                        @endif
                                        </td>
                                        <td>
                                    
                                            <a href="{{url('admin/banner/delete/'.$banner->id.'/'.$banner->types)}}"
                                               class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash-o"></i>  Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>№</th>
                                        <th>Banners Name</th>
                                        <th>Types</th>
                                        <th>Pictures</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection('content')