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

                    <br>
                    {!! link_to(route('router.create'), 'Back') !!}

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
                    {!! Form::model($router,array('route' => array('router.update',$router->id ),'files' => true,'method' => 'PATCH')) !!}
                    {{ csrf_field() }}
                    {!! Form::submit('Отправить',['class'=>'btn btn-primary btn-sm buttonText']) !!}

                    <input  type="file" class="form-control btn btn-bitbucket" name="images" placeholder="Изображение">


                    {!! Form::text('model',null ,['class'=>'form-control' ,'placeholder' => 'Модель']) !!}
                    {!! Form::text('producer',null ,['class'=>'form-control' ,'placeholder' => 'Производитель']) !!}
                    {!! Form::text('type',null ,['class'=>'form-control' ,'placeholder' => 'Тип']) !!}
                    {!! Form::text('standart',null ,['class'=>'form-control' ,'placeholder' => 'Стандарт']) !!}
                    {!! Form::text('dualBand',null ,['class'=>'form-control' ,'placeholder' => 'Робота в двух диапазонах (dual band):']) !!}
                    {!! Form::text('interface',null ,['class'=>'form-control' ,'placeholder' => 'Интерфейс подключения (LAN-порт):']) !!}
                    {!! Form::text('wan',null ,['class'=>'form-control' ,'placeholder' => 'Вход (WAN-порт):']) !!}
                    {!! Form::text('usb',null ,['class'=>'form-control' ,'placeholder' => 'USB:']) !!}
                    {!! Form::text('storage',null ,['class'=>'form-control' ,'placeholder' => 'Подключения по USB (внешний накопитель / принтер / 3G-модем):']) !!}
                    {!! Form::text('typeAntenna"',null ,['class'=>'form-control' ,'placeholder' => 'Тип антени (внутр / зовн):']) !!}
                    {!! Form::text('numberAntenna',null ,['class'=>'form-control' ,'placeholder' => 'Количество антен:']) !!}
                    {!! Form::text('text',null ,['class'=>'form-control' ,'placeholder' => 'Описание:']) !!}
                    {!! Form::text('price',null ,['class'=>'form-control' ,'placeholder' => 'Цена']) !!}


                    <select name="category_id" id="" class="form-control"   placeholder="Категория">
                        <option disabled>Выберите категорию</option>
                    </select>


                    {!! Form::textarea('text',null,['class'=>'form-control','id'=>'editor1','placeholder' => 'Описание']) !!}


                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </section>

@endsection
