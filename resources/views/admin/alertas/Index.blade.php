@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Generar Alertas por Vencimiento de Requerimientos</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>¡Alertas enviadas con</strong> {{session('info')}}
    </div>

    @else

    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.alertas.store']) !!}
                {!! Form::submit('Enviar Alerta de requerimientos por vencer', ['class'=>'btn btn-primary mt-2']) !!}
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