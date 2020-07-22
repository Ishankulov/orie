@extends('admin.layouts')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            Добавить Баннеры
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Главное</a></li>
                <li class="active">Добавить Баннеры</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Добавить Изоображения</h3>
                        </div>
                       
                        <form  method="POST" action="{{url('admin/banner/image/save')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group col-xs-3" id="divf">
                                    <label for="exampleInputEmail1">Banner name</label>
                                    <input type="text" class="form-control " id="exampleInputEmail1"
                                           name="name">

                                </div>

                                <div class="form-group col-xs-3" id="divf">
                                    <label for="exampleInputEmail1">Picture</label>
                                    <input type="file"  id="exampleInputEmail1"
                                           name="image" >
                                   
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="divf">
                                    <label for="exampleInputEmail1">Type of banner</label>
                                    <select name="types" class="form-control">
                                        <option selected>Select type</option>
                                        <option value="slider">slider</option>
                                        <option value="content">content</option>
                                        <option value="footer">footer</option> 
                                        <option value="about_us">about us</option>
                                    </select>
                                    <span class="text-danger">Формат Изоображения должен быть:</span>
                            </div>
                            
                        
                            
                            <!-- /.box-body -->
                            
                            <div class="box-footer ">
                                <button type="submit" class="btn btn-primary " style="position: relative;
                                     top: 15px; left: 38px;">Добавить Изоображения</button>
                                                    
                            </div>
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @endif
                            @if (count($errors))
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if($error == 'The name has already been taken.')
                                                    <li>Данный предмет уже существует.</li>
                                                @endif
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
    @endsection('content')