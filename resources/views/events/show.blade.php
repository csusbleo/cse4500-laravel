@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>Calendar Event</h1>
@stop

@section('content')
  <h2>{{ $event->title; }}</h2>
  <div><p>{{ $event->start_at; }} - {{ $event->end_at; }}</p></div>
@stop
