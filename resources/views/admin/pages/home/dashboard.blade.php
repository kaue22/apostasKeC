@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')
    <h1>DASHBOARD</h1>
    <button type="submit" action="{{route('create.index')}}" class="btn btn-dark">Add</button>
@stop

@section('content')
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
@stop
