@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Editar Requerimiento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($requerimiento, ['route' => ['admin.requerimientos.update', $requerimiento], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('CDSolicitud', 'IDSolicitud: ') !!}
                {!! Form::text('CDSolicitud', null, ['class'=> 'form-control' . ($errors->has('CDSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'ID Solicitud']) !!}
                @error('CDSolicitud')
                    <span class="invalid-feedback">
                          <strong>{{$message}}</strong>
                    </span>
                @enderror
                {!! Form::label('IDCliente', 'Nombre Solicitante: ') !!}
                <br>
                @foreach ($clientesrequerimientos as $clientesrequerimiento)
                        @if ($clientesrequerimiento->IDRequerimiento == $requerimiento->id)
                            @foreach ($clientes as $cliente)
                                @if ($cliente->id == $clientesrequerimiento->IDCliente)
                                    <p class="form-control">{{$cliente->NMCliente}}</p>
                                @endif
                            @endforeach
                        @endif        
                @endforeach
                {!! Form::label('IDDepto', 'Departamento: ') !!}
                <br>
                @foreach ($deptorequerimientos as $deptorequerimiento)
                        @if ($deptorequerimiento->IDRequerimiento == $requerimiento->id)
                            @foreach ($departamentos as $departamento)
                                @if ($departamento->IDDepto == $deptorequerimiento->IDDepto)
                                    <p class="form-control">{{$departamento->NMDepto}}</p>
                                @endif
                            @endforeach
                        @endif        
                @endforeach
                {!! Form::label('IDFormaIngreso', 'Forma de Ingreso: ') !!}
                <br>
                {!! Form::select('forma', $formas->pluck('NMFormaIngreso','IDFormaIngreso'), ['class'=> 'form-control']) !!}
                <br>
                {!! Form::label('IDClasificacion', 'Clasificacion: ') !!}
                <br>
                {!! Form::select('clasificacione', $clasificaciones->pluck('NMClasificacion','IDClasificacion'), ['class'=> 'form-control']) !!}
                <br>
                {!! Form::label('FCIngreso', 'Fecha de Ingreso: ') !!}
                <br>
                {!! Form::date('FCIngreso', $requerimiento->FCIngreso,['class'=> 'form-control']) !!}
                {!! Form::label('FCRespuesta', 'Fecha de Respuesta: ') !!}
                <br>
                {!! Form::date('FCRespuesta', $requerimiento->FCRespuesta,['class'=> 'form-control']) !!}
                {!! Form::label('GLRequerimiento', 'Ingrese requerimiento: ') !!}
                {!! Form::textarea('GLRequerimiento', null, ['class'=>'form-control', 'placeholder' => 'Escriba su consulta aquí']) !!}
                @error('GLRequerimiento')
                    <span class="invalid-feedback">
                          <strong>{{$message}}</strong>
                    </span>
                @enderror
                {!! Form::label('Adjunto', 'Seleccione Archivo: ') !!}
                {!! Form::file('Adjunto', ['class'=>'form-control', 'placeholder' => 'Seleccione archivo']) !!}
            </div>  
            
            {!! Form::submit('Actualizar Requerimiento', ['class'=>'btn btn-primary mt-2']) !!}
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