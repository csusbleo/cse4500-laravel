@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        @foreach($todos AS $todo)
        <tr>
          <td>{{ $todo->id }}</td>
          <td>{{ $todo->title }}</td>
          <td><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: {{ $todo->progress }}%"></div></div></td>
          <td><span class="badge bg-danger">{{ $todo->progress }}%</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop


@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
