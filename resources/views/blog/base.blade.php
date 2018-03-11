<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">

    @include('blog._style')
</head>

<body>

<section class="preloader">
    @include('blog._preloader')
</section>

<div class="wrapper">

    <section class="hero overlay">

    @include('blog._slider')
    @include('blog._header')

    </section>


    <section class="content">
        @yield('content')
    </section>

    <footer class="footer bg-beige dotted gap-double-sm">
        @include('blog._footer')
    </footer>

</div>


@include('blog._script')

</body>

</html>



