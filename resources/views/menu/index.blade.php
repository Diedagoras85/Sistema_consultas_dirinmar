@extends('layouts.plantilla')
@section('title','menu')
@section('content')
         <h1>Menú principal</h1>
         <!--form action="{{route('menu.formulario')}}" method="POST"-->
         
            @csrf
            
            <button type="submit">Consultas</button>
            <br>
            <br>
            <button type="submit">Nuevo Ingreso</button>
            <br>
            <br>
            <a href= http://localhost:8080/Sistema_consultas_Dirinmar/public/menu/formulario target=_blank><button>Ingreso Solicitud</button></a>
            <br>
            <br>
            <button type="submit">Módulo Reportes</button>
            <br>
            <br>
            <button type="submit">Módulo Estadísticas</button>
            <br>
            <br>
            <a href= http://localhost:8080/Sistema_consultas_Dirinmar/public target=_blank><button>Volver</button></a>

      </form>
@endsection