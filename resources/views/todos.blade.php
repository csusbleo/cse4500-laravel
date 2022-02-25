@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header ui-sortable-handle" style="cursor: move;">
    <h3 class="card-title">
    <i class="ion ion-clipboard mr-1"></i>To Do List</h3>
  </div>

  <div class="card-body">
    <ul class="todo-list ui-sortable" data-widget="todo-list">

      <li class="done" style="">
        <span class="handle ui-sortable-handle">
          <i class="fas fa-ellipsis-v"></i>
          <i class="fas fa-ellipsis-v"></i>
        </span>
        <div class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="">
        </div>
        <span class="text">Make the website responsive</span>
        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
      </li>

      <li>
        <span class="handle ui-sortable-handle">
        <i class="fas fa-ellipsis-v"></i>
        <i class="fas fa-ellipsis-v"></i>
        </span>
        <div class="icheck-primary d-inline ml-2">
          <input type="checkbox" value="">
        </div>
        <span class="text">Design a database</span>
        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
      </li>


      <li>
        <span class="handle ui-sortable-handle">
          <i class="fas fa-ellipsis-v"></i>
          <i class="fas fa-ellipsis-v"></i>
        </span>
        <div class="icheck-primary d-inline ml-2">
          <input type="checkbox" value="">
        </div>
        <span class="text">Testing</span>
        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
      </li>
  </ul>
  </div>
</div>
@stop
