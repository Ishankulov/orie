@extends('admin.layouts')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            Добавить Коллегу

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>  Главное</a></li>
                <li class="active">Добавить Коллегу</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">  Добавить Коллегу</h3>
                        </div>

                        <form  method="POST" action="{{url('admin/add_team/save')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body"> 
                                <div class="form-group" id="divf">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           name="name" placeholder="Name">
                                </div>
                                <div class="form-group" id="divf">
                                    <label for="exampleInputEmail1">Profession</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           name="profession" placeholder="Profession">
                                </div>
                           
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto</label>
                                    <input type="file" id="exampleInputFile" name="image">

                                    <p class="help-block text-danger">Формат фото должна быть выше:</p>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Добавить Коллегу</button>
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
            </div>
            <!-- /.box-body -->
        </section>
    </div>




@endsection