@extends('admin.layouts')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Добавить цену на топливо</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Главное</a></li>
                <li class="active">Добавить цену на топливо</li>
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
                        <br/>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="{{url('admin/add_prices')}}"
                                   class="btn btn-info pull-right">
                                    <i class="fa fa-plus"></i> Добавить цену на топливо
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
                            <th scope="col">Name</th>
                            <th scope="col">Prices</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($prices as $price)
                            <tr>
                            <td>{{$price->id}}</td> 
                            <td>{{$price->name}}</td>
                            <td>{{$price->price}}</td> 
                            <td> <a href="{{url('admin/prices/update/'.$price->id)}}"
                            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> update
                                </a>
                                <a href="{{url('admin/prices/delete/'.$price->id)}}"
                            class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> delete
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