@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Editar Relación Usuario con Departamento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($usuariodepto, ['route' => ['admin.emails.update', $usuariodepto], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('NMCliente', 'Nombre Solicitante: ') !!}
                @foreach ($usuarios as $usuario)
                      @if ($usuario->id == $usuariodepto->IDUsuario)
                           <p class="form-control">{{$usuario->name}}</p>
                      @endif
                @endforeach
                {!! Form::label('NMDepto', 'Nombre Departamento: ') !!}
                <br>
                {!! Form::select('departamento', $departamentos->pluck('NMDepto','IDDepto'), ['class'=> 'form-control']) !!}
            </div>
            {!! Form::submit('Actualizar Relación', ['class'=>'btn btn-primary mt-2']) !!}
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