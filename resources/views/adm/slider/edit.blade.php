@extends('layouts.adm.base')

@section('title','Редактировать пост')


@section('content')

    <section class="content-header">

    </section>

    <section class="content container-fluid">

        <div class="col-md-10">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <small>Input Form</small>
                    </h3>

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
                    {!! Form::model($slider,array('route' => array('sli.update',$slider->id ),'files' => true,'method' => 'PATCH')) !!}
                    {{ csrf_field() }}
                    {!! Form::submit('send form',['class'=>'btn btn-primary btn-sm buttonText']) !!}
                    <input  type="file" class="form-control btn btn-bitbucket" name="images" placeholder="Введите имя">


                    {!! Form::text('caption',null,['class'=>'form-control ','placeholder' => 'Введите заголовок']) !!}
                    {!! Form::text('text',null,['class'=>'form-control ','placeholder' => 'Введите текст']) !!}


                    {!! Form::close() !!}

                </div>
            </div>
        </div>

</section>

@endsection
