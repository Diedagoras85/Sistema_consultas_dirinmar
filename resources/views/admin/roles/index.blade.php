@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Lista de Roles</h1>
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
            <a href="{{route('admin.roles.create')}}">Crear nuevo rol</a>
        </div>
        <div class="card-body">
            <table class= "table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningún rol registrado</td>
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