@extends('admin.layouts')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            Добавить Новости

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Главное</a></li>
                <li class="active">Добавить Новости</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">  Добавить Новости</h3>
                        </div>

                        <form  method="POST" action="{{url('admin/add_news/save')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body"> 
                                <div class="form-group" id="divf">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           name="title" placeholder="Title of news">
                                </div> 
                                <div class="form-group" id="divf">
                                    <label for="exampleInputEmail1">News</label>
                                    <textarea class="form-control" rows="3" name="news" placeholder="Enter ..."></textarea>
                                </div>
                           
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto</label>
                                    <input type="file" id="exampleInputFile" name="image">

                                    <p class="help-block text-danger">Формат фото должна быть выше:</p>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Добавить Новости</button>
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