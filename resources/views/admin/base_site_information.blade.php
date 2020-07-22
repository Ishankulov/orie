@extends('admin.layouts')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Контактная информация</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Главное</a></li>
                <li class="active">Контактная информация блог</li>
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
                                <a href="{{url('admin/add_info_site')}}"
                                   class="btn btn-info pull-right">
                                    <i class="fa fa-plus"></i> Добавить Контактнуя информацию 
                                </a>

                            </div>
                        <br/>
                    <br/>
                        <!-- /.box-header -->
                    <div class="box-body">

                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Addres</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($information as $info)
                            <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->phone}}</td>
                            <td>{{$info->email}}</td>
                            <td>{{$info->addres}}</td>
                            <td> 
                                <a href="{{url('admin/base_site_information/update/'.$info->id)}}"
                                    class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Update
                                </a>
                                <a href="{{url('admin/base_site_information/delete/'.$info->id)}}"
                                    class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                            </td> 
                            </tr>
                            <tr> 
                        @endforeach  
                        </tbody>
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
@endsection('content')