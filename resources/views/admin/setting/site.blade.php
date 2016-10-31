@extends('adminlte::page')

@section('title', 'Site setting')

@section('content_header')
    <h1>Site setting</h1>
@stop

@section('content')
    <p>setting site</p>
    <form action="" method="post">
        {!! csrf_field() !!}
        site name:<input type="text" value="{{ config('setting.site') }}">

        <input type="submit" name="save">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@stack('css')
@yield('css')

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@stack('js')
@yield('js')