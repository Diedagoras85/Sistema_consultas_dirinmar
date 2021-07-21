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
            <a href="{{route('admin.clientes.create')}}">Crear nuevo Requerimiento</a>
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
                    @forelse ($requerimiento as $cliente)
                        <tr>
                            <td>{{$cliente->IDCliente}}</td>
                            <td>{{$cliente->NMCliente}}</td>
                            <td>{{$cliente->NRRun}}</td>
                            <td>{{$cliente->NMDireccion}}</td>
                            <td>{{$cliente->NRTelefono}}</td>
                            <td>{{$cliente->NRMovil}}</td>
                            <td>{{$cliente->GLEmpresa}}</td>
                            <td>{{$cliente->GLCiudad}}</td>
                            @foreach ($paises as $pais)
                                @if ($pais->IDPais == $cliente->IDPais)
                                     <td>{{$pais->NMNombre}}</td>   
                                @endif
                            @endforeach
                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.clientes.edit', $cliente)}}">Editar</a>
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