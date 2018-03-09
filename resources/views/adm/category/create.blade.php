@extends('layouts.adm.base')

@section('title','Добавление-Категории')

@section('content')

    <section class="content-header">

    </section>

    <section class="content container-fluid">

        <div class="col-md-10">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">

                        <nav aria-label="Page navigation ">
                            {{ $category->links() }}
                        </nav>

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

                </div>

                <div class="box-body pad">

                    {!! Form::open(['route'=>'category.store','files' => true]) !!}

                    {{ csrf_field() }}

                    {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}

                    <input type="text" class="form-control" name="name" placeholder="Введите имя">
                    <input type="text" class="form-control" name="slug" placeholder="Введите алиас">


                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="col-md-10">

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
                            <th>Алиас</th>
                            <th>Управление</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td class="col-md-3">


                                    {{--Delete--}}
                                    <button title="Delete article" type="button" class="btn btn-danger"
                                            data-toggle="modal"
                                            data-target="#delete_article_{{ $item->id  }}"><span
                                                class="fa fa-trash-o"></span>
                                    </button>

                                </td>
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

    </section>



        {{--//modal--}}

    @foreach($category as $item)
        <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('category.destroy', ['id' => $item->id]) }}" method="post">
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
            </form>
        </div>
    @endforeach


@endsection