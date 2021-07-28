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
            <a href="{{route('admin.requerimiento.create')}}">Crear nuevo Requerimiento</a>
        </div>
        <div class="card-body">
            <table class= "table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cod Solicitud</th>
                        <th>Nombre Solicitante</th>
                        <th>Identificacion</th>
                        <th>Forma Ingreso</th>
                        <th>Fecha Ingreso</th>
                        <th>Fecha Respuesta</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($requerimientos as $requerimiento)
                        <tr>
                            <td>{{$requerimiento->IDRequerimiento}}</td>
                            <td>{{$requerimiento->CDSolicitud}}</td>
                            @foreach ($clientereqs as $clientereq)
                                @if ($clientereq->IDRequerimiento == $requerimiento->IDRequerimiento)
                                     @foreach ($clientes as $cliente)
                                          @if ($cliente->IDCliente == $clientereq->IDCliente)
                                               <td>{{$cliente->NMCliente}}</td>
                                               <td>{{$cliente->NRRun}}</td>
                                          @endif
                                     @endforeach    
                                @endif
                            @endforeach
                            <td>{{$requerimiento->FCIngreso}</td>
                            <td>{{$requerimiento->FCRespusta}}</td>
                            <td>{{$requerimiento->NMDireccion}}</td>
                            <td>{{$requerimiento->NRTelefono}}</td>
                            <td>{{$requerimiento->NRMovil}}</td>
                            <td>{{$requerimiento->GLEmpresa}}</td>
                            <td>{{$requerimiento->GLCiudad}}</td>
                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.requerimientos.edit', $requerimiento)}}">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningún cliente registrado</td>
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