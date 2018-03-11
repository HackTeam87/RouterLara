<section id="product" class="text-center ">
    ﻿
    <div class="container">
       <div class="row">
           <blockquote>
           <h3 style="margin: 70px 0 50px 0;"><b>Оборудование</b></h3>

           @include('blog._cssArrow')

           </blockquote>
       </div>
        <div class="row">

            <div class="wizard-navigation">
                <ul>
                    <li><a href="#small" data-toggle="tab" >Домофонные системы</a></li>
                    <li><a href="#middle" data-toggle="tab">Сетевое оборудование</a></li>
                    <li><a href="#ipt" data-toggle="tab">IPTV / OTT приставки</a></li>
                </ul>
            </div>
        </div>



        <div class="row">
            <div class="tab-content">
                <div class="tab-pane " id="small">
                    <div class="row">

                        <div class="col-md-6 col-sm-12">

                            <div class=" about-bottom-right">

                                <div class="col-xs-2 aboutagile-grid">

                                    <img  width="300" src="{{asset('/blog/img/domofon/adapter.jpg')}}"/>

                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-12 services-grids w3layouts-grids">
                            <h4 class="about-bottom-title">Адаптер Slinex VZ-10 </h4>
                            <div class="bs-docs-example">
                                <table class="table table-bordered" style="color: grey;font-family: 'Lato',sans-serif;" >
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <p>Цена: <b style="color:red; font-size:15px;">300 грн.</b></p>
                                    <tr>
                                        <td><b>Питание (от монитора):</b></td>
                                        <td>В: 10 - 15</td>
                                    </tr>
                                    <tr>
                                        <td><b>Мощность:</b></td>
                                        <td>Вт: 1</td>
                                    </tr>
                                    <tr>
                                        <td><b>Габаритные размеры, мм:</b></td>
                                        <td> 15 x 40 x 10</td>
                                    </tr>
                                    <tr>
                                        <td><b>Описание:</b></td>
                                        <td>
                                            Позволяет подключить любые 4-проволочные домофоны в координатных многоквартирных домофонов и обеспечивает согласование разговорных и управляющих цепей видеомонитора и подъездного домофона.Этот адаптер предназначен для подключения многоквартирных подъездных домофонов
                                            «Визит», «Цифрал», «Метаком» к видеомониторов брендов «Slinex», «Commax», «Gardi», «Kenwei».
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="col-md-6 about-bottom-g1">
                            <div class=" about-bottom-right">
                                <div class="col-xs-2 aboutagile-grid">
                                    <img style="margin-left:135px;" width="300" src="{{asset('/blog/img/domofon/trubka1.jpg')}}" />
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="col-md-6 services-grids w3layouts-grids">
                            <h4 class="about-bottom-title">Устройство переговорное </h4>
                            <div class="bs-docs-example">
                                <table class="table table-bordered" style="color: grey; font-family: 'Lato',sans-serif;">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <p>Цена: <b style="color:red; font-size:15px;">400 грн.</b></p>
                                    <tr>
                                        <td><b>Кнопка открытия замка;</b></td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td><b>Регулировка громкости звонка;</b></td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td><b>Дуплексная связь</b></td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td><b>Індикація сигнала вызова</b></td>
                                        <td>+</td>
                                    </tr>
                                    <tr>
                                        <td><b>Размеры, мм. (ШхВхГ)</b></td>
                                        <td>54х200х40;</td>
                                    </tr>
                                    <tr>
                                        <td><b>Диапазон робочих температур</b></td>
                                        <td>від +5 до +45</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane active" id="middle">
                    <div class="row">
                        @foreach($networks as $item)
                            <div class="col-md-6 col-sm-12">

                                <div class=" about-bottom-right">

                                    <div class="col-xs-2 aboutagile-grid">

                                        <img  width="450"
                                             src="blog/img/routers/{{$item->images}}"/>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">

                                <h4 class="about-bottom-title">{{$item->model}}</h4>

                                <div class="bs-docs-example">
                                    <table class="table table-bordered" style="color:gray;font-family: 'Lato', sans-serif;">
                                        <thead>
                                        </thead>
                                        <tbody>
                                        <p>Цена: <b style="color:red; font-size:15px;">{!! $item->price !!}</b></p>
                                        <tr>
                                            <td><b>Производитель:</b></td>
                                            <td>{!! $item->producer !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Тип:</b></td>
                                            <td>{!! $item->type !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Стандарт</b></td>
                                            <td>{!! $item->standard !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Робота в двух диапазонах (dual band):</b></td>
                                            <td>{!! $item->dualBand !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Интерфейс подключения (LAN-порт):</b></td>
                                            <td>{!! $item->interface !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Вход (WAN-порт):</b></td>
                                            <td>{!! $item->wan !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>USB:</b></td>
                                            <td>{!! $item->usb !!}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Подключения по USB (внешний накопитель / принтер / 3G-модем):</b>
                                            </td>
                                            <td>{!! $item->storage !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Тип антенны (внутр / внеш):</b></td>
                                            <td>{!! $item->typeAntenna !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Количество антен:</b></td>
                                            <td> {!! $item->numberAntenna !!}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Описание:</b></td>
                                            <td>
                                                {!! $item->text !!}
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="tab-pane" id="ipt">

                    <div class="row">

                        @foreach($iptv as $item)

                            <div class="col-md-6 col-sm-12">

                                <div class=" about-bottom-right">

                                    <div class="col-xs-2 aboutagile-grid">

                                        <img  width="450"
                                             src="/blog/img/iptv/{{$item->images}}"/>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">

                                <h4 class="about-bottom-title">{{$item->model}}</h4>

                                <div class="bs-docs-example">


                                        <table class="table table-bordered" style="color:gray;font-family: 'Lato', sans-serif;">
                                            <thead>
                                            </thead>
                                            <tbody>
                                            <p>Цена: <b style="color:red; font-size:15px;">{!! $item->price !!} грн.</b></p>

                                            <tr>
                                                <td><b>Производитель:</b></td>
                                                <td>{!! $item->producer !!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Тип:</b></td>
                                                <td>{!! $item->type !!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Процессор</b></td>
                                                <td>{!! $item->processor !!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Память</b></td>
                                                <td>{!! $item->storage!!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Wi-Fi</b></td>
                                                <td>{!! $item->wifi !!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>HDMI</b></td>
                                                <td>{!! $item->interface !!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Композитний вход</b></td>
                                                <td>{!! $item->compozit !!}</td>
                                            </tr>
                                            <tr>
                                                <td><b>USB:</b></td>
                                                <td>{!! $item->usb !!}</td>
                                            </tr>

                                            </tbody>
                                        </table>




                                </div>

                            </div>
                        @endforeach
                            <div class="iptv">
                            {{--<nav aria-label="Page navigation ">--}}
                                {{--{{ $iptv->links() }}--}}
                            {{--</nav>--}}
                        {{--@include('blog.AjaxScript')--}}
                            </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


</section>`