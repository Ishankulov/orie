@extends('admin.layouts')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            Обнавить Отзыв

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Главное</a></li>
                <li class="active">Обнавить Отзыв</li>
            </ol>
        </section>
        <section class="content">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Обнавить Отзыв</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form  method="POST" action="{{url('admin/add_feedback/update')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                        <div class="form-group"> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       name="name" value="{{$data->name}}">
                                <input type="hidden" value="{{$data->id}}" name="id" id="id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Profession </label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       name="profession" value="{{$data->profession}}">
                                <input type="hidden" value="{{$data->id}}" name="id" id="id">
                            </div>
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Feedback</label> 
                                <textarea class="form-control" rows="3" id="exampleInputEmail1" name="feedback" value="{{$data->feedback}}"></textarea>
                                 
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary"> Изменить</button>
                        </div>
                        @if(Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        @if (count($errors))
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </section>
    </div>
@endsection