@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Lista de Requerimientos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>!Éxito!</strong> {{session('info')}}
        </div>
     
    @else
        
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.requerimientos.create')}}">Crear nuevo Requerimiento</a>
        </div>
        <div class="card-body">
            <table class= "table table-striped">
                <thead>
                    <tr>
                        <th>Cod Solicitud</th>
                        <th>Nombre Solicitante</th>
                        <th>Identificacion</th>
                        <th>Departamento</th>
                        <th>Forma Ingreso</th>
                        <th>Clasificacion</th>
                        <th>Fecha Ingreso</th>
                        <th>Fecha Respuesta</th>
                        <th>Estado</th>
                        <th>Total Dias</th>
                        <th>Accion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($requerimientos as $requerimiento)
                        <tr>
                            <td>{{$requerimiento->CDSolicitud}}</td>
                            @foreach ($clientereqs as $clientereq)
                                @if ($clientereq->IDRequerimiento == $requerimiento->id)
                                     @foreach ($clientes as $cliente)
                                          @if ($cliente->id == $clientereq->IDCliente)
                                               <td>{{$cliente->NMCliente}}</td>
                                               <td>{{$cliente->NRRun}}</td>
                                          @endif
                                     @endforeach    
                                @endif
                            @endforeach
                            @foreach ($deptoreqs as $deptoreq)
                                @if ($deptoreq->IDRequerimiento == $requerimiento->id)
                                     @foreach ($departamentos as $departamento)
                                          @if ($departamento->IDDepto == $deptoreq->IDDepto)
                                               <td>{{$departamento->NMDepto}}</td>
                                          @endif
                                     @endforeach    
                                @endif
                            @endforeach
                            @foreach ($formas as $forma)
                                @if ($forma->IDFormaIngreso == $requerimiento->IDFormaIngreso)
                                    <td>{{$forma->NMFormaIngreso}}</td>
                                @endif
                            @endforeach 
                            @foreach ($clasificaciones as $clasificacione)
                                @if ($clasificacione->IDClasificacion == $requerimiento->IDClasificacion)
                                    <td>{{$clasificacione->NMClasificacion}}</td>
                                @endif
                            @endforeach 
                            <td>{{$requerimiento->FCIngreso}}</td>
                            <td>{{$requerimiento->FCRespuesta}}</td>
                            @if ($requerimiento->LGRespondido == 1)
                                <td>Terminado</td>
                            @else
                                <td>Pendiente</td>
                            @endif
                            <td>{{$requerimiento->NRDiaatraso}}</td>
                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.requerimientos.edit', $requerimiento)}}">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningún requerimiento registrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop