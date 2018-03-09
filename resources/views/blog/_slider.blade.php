<!--Main slider-->
<div class="main-slider  flexslider">
    <ul class="slides">
        @foreach($slider as $item)
        <li>

            <div class="background-img zoom">
                <img src="/blog/img/slider/{!!$item->images!!}" alt="">
            </div>

        </li>
        @endforeach
    </ul>


</div>
<div class="inner-hero">
    <!--Container-->
    <div class="container hero-content">
        <!--Row-->
        @foreach($slider as $item)
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="large text-white secondary-font mb-0">{!! $item->caption !!}</h1>
                    <h6 class="mb-0 text-white uppercase">{!! $item->text !!}</h6>
                </div>
            </div>
    @endforeach
    <!--End row-->
    </div>
    <!--End container-->
</div>
<!--End main slider-->
