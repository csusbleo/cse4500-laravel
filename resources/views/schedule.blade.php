@extends('adminlte::page')

@section('title', 'Schedule')

@section('content_header')
    <h1>Schedule</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-body p-0">
        <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('js')
<script>
$( document ).ready(function() {
    var calendar = new FullCalendar.Calendar($('#calendar'), {
      initialView: 'dayGridMonth'
    });
})
</script>
@stop
