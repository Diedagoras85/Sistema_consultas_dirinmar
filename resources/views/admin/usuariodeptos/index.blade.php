@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Lista de Usuarios y Departamento Asociado</h1>
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
            <a href="{{route('admin.usuariodeptos.create')}}">Asignar Usuario a Departamento</a>
        </div>
        <div class="card-body">
            <table class= "table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Usuario</th>
                        <th>Departamento</th>
                        <th>Accion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($usuariodeptos as $usuariodepto)
                        <tr>
                            <td>{{$usuariodepto->id}}</td>
                            @foreach ($usuarios as $usuario)
                                    @if ($usuario->id == $usuariodepto->IDUsuario)
                                        <td>{{$usuario->name}}</td>
                                    @endif
                            @endforeach    
                            @foreach ($departamentos as $departamento)
                                    @if ($departamento->IDDepto == $usuariodepto->IDDepto)
                                        <td>{{$departamento->NMDepto}}</td>
                                    @endif
                            @endforeach    
                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.usuariodeptos.edit', $usuariodepto)}}">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ninguna relación creada</td>
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