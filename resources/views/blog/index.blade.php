@extends('blog.base')

@section('title', 'Ваш мастер')

@section('content')
    @include('blog._product')
    @include('blog._service')
    @include('blog._about')
@endsection


