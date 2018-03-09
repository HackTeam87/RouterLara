@extends('layouts.adm.base')

@section('title','Добавить пост')



@section('content')

    <section class="content-header">

    </section>

    <section class="content container-fluid">

        <div class="col-md-8">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Таблица</h3>
                </div>

                <nav aria-label="Page navigation ">
                    {{ $slider->links() }}
                </nav>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Заголовок</th>
                            <th>Текст</th>
                            <th>Изображение</th>
                            <th>Управление</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slider as $item)
                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->caption !!}</td>
                                <td>{!! $item->text !!}</td>
                                <td>
                                        <div class="row">
                                            <img class="img-circle" src="/blog/img/slider/{!! $item->images !!}" alt="img" width="70px">
                                        </div>
                                <td class="col-md-3">
                                    <a title="Edit article" href="{{ url('adm/sli/'.$item->id.'/edit') }}"
                                       class="btn btn-warning"><span class="fa fa-edit"></span></a>

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


                <div class="box-body pad">

                    {!! Form::open(['route'=>'sli.store','files' => true]) !!}
                    {{ csrf_field() }}
                    {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm ']) !!}

                        <input type="file" name="images" class="form-control btn btn-primary">


                        <input type="text" class="form-control" name="caption" placeholder="Введите заголовок">
                        <input type="text" class="form-control" name="text" placeholder="Введите текст">

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>


        {{--//modal--}}

        @foreach($slider as $item)
            <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
                 aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <form class="" action="{{ route('sli.destroy', ['id' => $item->id]) }}" method="post">
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
