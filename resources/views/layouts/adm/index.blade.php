@extends('layouts.adm.base')

@section('title','Админ-Панель')

@section('content')

    <section class="content-header">

    </section>

    <section class="content container">

        <div class="col-md-8">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Таблица</h3>
                </div>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Имя</th>
                            <th>Текст</th>
                            <th>Категория</th>
                            <th>Изображение</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->text}}</td>
                                <td>{{$item->category_id}}</td>
                                <td>{{$item->images}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <small>Input Form</small>
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <form>

                        <input  type="file" class="form-control btn btn-bitbucket" name="name" placeholder="Введите имя">

                        <select name="category_id" class="form-control ">
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                        <input type="text" class="form-control" name="name" placeholder="Введите имя">

                        <textarea id="editor1" name="editor1" rows="10" cols="50" placeholder="Введите текст">

                    </textarea>

                    </form>
                </div>
            </div>
        </div>



        {{--//modal--}}

        @foreach($posts as $item)
            <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
                 aria-labelledby="mySmallModalLabel" aria-hidden="true">
                {{--<form class="" action="{{ route('dash.destroy', ['id' => $item->id]) }}" method="post">--}}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header bg-red">
                                <h4 class="modal-title" id="mySmallModalLabel">Delete article</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <div class="modal-body">
                                Are you sure to delete article: <b>{{ $item->title }} </b>?

                            </div>
                            <div class="modal-footer">
                                <a href="{{ url('/') }}">
                                    <button type="button" class="btn btn-dropbox pull-left " data-dismiss="modal">Close
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-danger" title="Delete" value="delete">Delete</button>
                            </div>
                        </div>
                    </div>
                {{--</form>--}}
            </div>
        @endforeach
    </section>

@endsection