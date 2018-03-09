<!--Header-->
<header class="header default">
    <div class=" left-part">
        <a class="logo scroll" href="#hero">
            <h2 class="mb-0">Ваш Мастер</h2>
        </a>
    </div>
    <div class="right-part">
        <nav class="main-nav">
            <div class="toggle-mobile-but">
                <a href="#" class="mobile-but" >
                    <div class="lines"></div>
                </a>
            </div>
            <ul>
                @foreach($menu as $item)
                <li><a class="scroll" href="#{{$item->alias}}">{{$item->name}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
<!--End header-->
