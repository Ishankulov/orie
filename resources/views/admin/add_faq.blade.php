@extends('admin.layouts')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            Добавить FAQ

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>  Главное</a></li>
                <li class="active">Добавить FAQ</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">  Добавить FAQ</h3>
                        </div>

                        <form  method="POST" action="{{url('admin/add_faq/save')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body"> 
                                <div class="form-group" id="divf">
                                    <label for="exampleInputEmail1">Question</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           name="question" placeholder="Вопрос">
                                </div>
                                <div class="form-group" id="divf">
                                    <label for="exampleInputEmail1">FAQ</label>
                                    <textarea class="form-control" rows="3" name="answer" placeholder="Ответ ..."></textarea>
                                </div>
                           
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Добавить FAQ</button>
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