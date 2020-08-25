@extends('adminlte::page')



@section('content_header')
    <h1>CADASTRA APOSTA</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
        <form action="" class="form">


            <div class ="form-group">
                <label>A</label>
                <input type="text" name="name" class ="form-control" placeholder="A">
            </div>
            <div class ="form-group">
                <label>B</label>
                <input type="text" name="name" class ="form-control" placeholder="B">
            </div>
            <div class ="form-group">
                <label>C</label>
                <input type="text" name="name" class ="form-control" placeholder="C">
            </div>
            <div class ="form-group">
                <label>D</label>
                <input type="text" name="name" class ="form-control" placeholder="D">
            </div>
        </form>

        </div>
    </div>
@endsection
