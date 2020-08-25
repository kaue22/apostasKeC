@extends('adminlte::page')



@section('content_header')
<h1>Cadastra Aposta
    <a href="{{ route('cadastraaposta.create')}}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th width=50>Ações</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>
                    <a href="" class="btn btn-warning">Visualizar</a>
                </td>
            </tr>


        </tbody>
    </table>
    @endsection