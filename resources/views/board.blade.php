@extends('adminlte::page')

@section('title', 'Board')

@section('content_header')
    <h1>Kenban Board</h1>
@stop

@section('content')

<div class="card card-row card-secondary">
<div class="card-header">
<h3 class="card-title">
Backlog
</h3>
</div>
<div class="card-body">
<div class="card card-info card-outline">
 <div class="card-header">
<h5 class="card-title">Create Labels</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#3</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1" disabled="">
<label for="customCheckbox1" class="custom-control-label">Bug</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled="">
<label for="customCheckbox2" class="custom-control-label">Feature</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled="">
<label for="customCheckbox3" class="custom-control-label">Enhancement</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox4" disabled="">
<label for="customCheckbox4" class="custom-control-label">Documentation</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox5" disabled="">
<label for="customCheckbox5" class="custom-control-label">Examples</label>
</div>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create Issue template</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#4</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1_1" disabled="">
<label for="customCheckbox1_1" class="custom-control-label">Bug Report</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled="">
<label for="customCheckbox1_2" class="custom-control-label">Feature Request</label>
</div>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create PR template</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#6</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
</div>
<div class="card card-light card-outline">
<div class="card-header">
<h5 class="card-title">Create Actions</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#7</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Aenean commodo ligula eget dolor. Aenean massa.
Cum sociis natoque penatibus et magnis dis parturient montes,
 nascetur ridiculus mus.
</p>
</div>
</div>
</div>
</div>
<div class="card card-row card-primary">
<div class="card-header">
<h3 class="card-title">
To Do
</h3>
</div>
<div class="card-body">
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create first milestone</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#5</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="card card-row card-default">
<div class="card-header bg-info">
<h3 class="card-title">
In Progress
</h3>
</div>
<div class="card-body">
<div class="card card-light card-outline">
<div class="card-header">
<h5 class="card-title">Update Readme</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#2</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Aenean commodo ligula eget dolor. Aenean massa.
Cum sociis natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus.
</p>
</div>
</div>
</div>
</div>
<div class="card card-row card-success">
<div class="card-header">
<h3 class="card-title">
Done
</h3>
</div>
<div class="card-body">
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create repo</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#1</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
</div>
</div>
</div>

@stop

@section('js')
<script>
$( document ).ready(function() {
    $(".content-wrapper").addClass('kenban');
})
</script>
@stop
