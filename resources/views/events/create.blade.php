@extends('adminlte::page')

@section('title', 'Calendar event')

@section('content_header')
    <h1>New Event</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input-date name="start_at"  :config="['format' => 'DD/MM/YYYY HH:mm']" label="Start" />
    <x-adminlte-input-date name="end_at"  :config="['format' => 'DD/MM/YYYY HH:mm']" label="End" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@stop

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
@stop
