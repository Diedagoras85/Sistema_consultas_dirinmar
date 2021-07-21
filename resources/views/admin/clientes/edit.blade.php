@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($cliente, 'route' => ['admin.clientes.update', $cliente], 'method' => 'put') !!}
            
              @include('admin.clientes.partials.form')
            
            {!! Form::submit('Crear Cliente', ['class'=>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop