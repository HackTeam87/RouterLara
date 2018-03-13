@extends('layouts.adm.base')

@section('title','Редактировать пост')


@section('content')

    <section class="content-header">

    </section>

    <section class="content container-fluid">

        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <small>Input Form</small>
                    </h3>

                    <br>
                    {!! link_to(route('iptv.create'), 'Back') !!}

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
                    {!! Form::model($iptv,array('route' => array('iptv.update',$iptv->id ),'files' => true,'method' => 'PATCH')) !!}
                    {{ csrf_field() }}
                    {!! Form::submit('Отправить',['class'=>'btn btn-primary btn-sm buttonText']) !!}

                    <input  type="file" class="form-control btn btn-bitbucket" name="images" placeholder="Изображение">

                    {!! Form::text('model',null ,['class'=>'form-control' ,'placeholder' => 'Модель']) !!}
                    {!! Form::text('producer',null ,['class'=>'form-control' ,'placeholder' => 'Производитель']) !!}
                    {!! Form::text('type',null ,['class'=>'form-control' ,'placeholder' => 'Тип']) !!}
                    {!! Form::text('processor',null ,['class'=>'form-control' ,'placeholder' => 'Процессор']) !!}
                    {!! Form::text('storage',null ,['class'=>'form-control' ,'placeholder' => 'Память']) !!}
                    {!! Form::text('wifi',null ,['class'=>'form-control' ,'placeholder' => 'Wifi']) !!}
                    {!! Form::text('interface',null ,['class'=>'form-control' ,'placeholder' => 'HDMI']) !!}
                    {!! Form::text('compozit',null ,['class'=>'form-control' ,'placeholder' => 'Композитный вход']) !!}
                    {!! Form::text('usb',null ,['class'=>'form-control' ,'placeholder' => 'Usb']) !!}
                    {!! Form::text('price',null ,['class'=>'form-control' ,'placeholder' => 'Цена']) !!}


                    <select name="category_id" id="" class="form-control" >
                        <option disabled>Выберите категорию</option>
                    </select>

                    {!! Form::textarea('text',null,['class'=>'form-control','id'=>'editor1','placeholder' => 'Описание']) !!}


                    {!! Form::close() !!}

                </div>
            </div>
        </div>

</section>

@endsection
