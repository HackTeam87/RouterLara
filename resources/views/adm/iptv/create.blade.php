@extends('layouts.adm.base')

@section('title','Добавить пост')



@section('content')

    <section class="content-header">

    </section>

    <section class="content container-fluid">

        <div class="col-md-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Таблица</h3>
                </div>

                <nav aria-label="Page navigation ">
                    {{ $iptv->links() }}
                </nav>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Изображение</th>
                            <th>Управление</th>
                            <th>Модель</th>
                            <th>Производитель</th>
                            <th>Тип</th>
                            <th>Процессор</th>
                            <th>Память</th>
                            <th>Wi-Fi</th>
                            <th>HDMI</th>
                            <th>Композитный вход</th>
                            <th>USB:</th>
                            <th>Изображение</th>
                            <th>Цена:</th>
                            <th>Категория</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($iptv as $item)
                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td><img  width="70" src="/blog/img/iptv/{{$item->images}}"/></td>
                                <td class="col-md-3">

                                    {{--Edit--}}
                                    <a title="Edit article" href="{{ url('adm/iptv/'.$item->id.'/edit') }}"
                                       class="btn btn-warning"><span class="fa fa-edit"></span></a>

                                    {{--Delete--}}
                                    <button title="Delete article" type="button" class="btn btn-danger"
                                            data-toggle="modal"
                                            data-target="#delete_article_{{ $item->id  }}"><span
                                                class="fa fa-trash-o"></span>
                                    </button>

                                </td>
                                <td>{!! $item->model !!}</td>
                                <td>{!! $item->producer !!}</td>
                                <td>{!! $item->type !!}</td>
                                <td>{!! $item->processor !!}</td>
                                <td>{!! $item->storage !!}</td>
                                <td>{!! $item->wifi !!}</td>
                                <td>{!! $item->interface !!}</td>
                                <td>{!! $item->compozit !!}</td>
                                <td>{!! $item->usb !!}</td>
                                <td>{!! $item->images !!}</td>
                                <td>{!! $item->price !!}</td>
                                <td>{!! $item->category_id !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
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

                    {!! Form::open(['route'=>'iptv.store','files' => true]) !!}
                    {{ csrf_field() }}
                    {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}

                    <input type="file" name="images" class="form-control btn btn-primary">

                    <input type="text" class="form-control" name="model" placeholder="Модель">
                    <input type="text" class="form-control" name="producer" placeholder="Производитель">
                    <input type="text" class="form-control" name="type" placeholder="Тип">
                    <input type="text" class="form-control" name="processor" placeholder="Процессор">
                    <input type="text" class="form-control" name="storage" placeholder="Память">
                    <input type="text" class="form-control" name="wifi" placeholder="Wifi">
                    <input type="text" class="form-control" name="interface" placeholder="HDMI">
                    <input type="text" class="form-control" name="compozit" placeholder="Композитный вход">
                    <input type="text" class="form-control" name="usb" placeholder="Usb">
                    <input type="text" class="form-control" name="images" placeholder="Изображение">
                    <input type="text" class="form-control" name="price" placeholder="Цена">
                    <input type="text" class="form-control" name="category_id" placeholder="Категория">

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>


    {{--//modal--}}

    @foreach($iptv as $item)
        <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('iptv.destroy', ['id' => $item->id]) }}" method="post">
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
