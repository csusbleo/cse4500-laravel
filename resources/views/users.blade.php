@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <p>
      {{ print_r($users) }}
    </p>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
