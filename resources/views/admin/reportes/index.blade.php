@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Reportes</h1>
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
            <a href="{{route('admin.reportes.create')}}">Imprimir</a>
        </div>
        <div class="card-body">
            <table class= "table table-striped">
                <thead>
                    <tr>
                        <th>Cod Solicitud</th>
                        <th>Nombre Solicitante</th>
                        <th>Forma Ingreso</th>
                        <th>Clasificacion</th>
                        <th>Departamento</th>
                        <th>Fecha Ingreso</th>
                        <th>Fecha Respuesta</th>
                        <th>Días para responder</th>
                        <th>HH Utilizada</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($requerimientos as $requerimiento)
                        <tr>
                            <td>{{$requerimiento->CDSolicitud}}</td>
                            @foreach ($clienterequerimientos as $clienterequerimiento)
                                      @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                                           @foreach ($clientes as $cliente)
                                                  @if (($cliente->id == $clienterequerimiento->IDCliente))
                                                          <td>{{$cliente->NMCliente}}</td>
                                                  @endif 
                                              @endforeach   
                                      @endif
                              @endforeach
                              @foreach ($formaingresos as $formaingreso)
                                      @if ($formaingreso->IDFormaIngreso == $requerimiento->IDFormaIngreso)
                                          <td>{{$formaingreso->NMFormaIngreso}}</td>
                                      @endif 
                              @endforeach
                              @foreach ($clasificaciones as $clasificacione)
                                      @if ($clasificacione->IDClasificacion == $requerimiento->IDClasificacion)
                                          <td>{{$clasificacione->NMClasificacion}}</td>
                                      @endif 
                              @endforeach
                              @foreach ($deptorequerimientos as $deptorequerimiento)
                                      @if ($deptorequerimiento->IDRequerimiento == $requerimiento->id)
                                              @foreach ($departamentos as $departamento)
                                                  @if ($departamento->IDDepto == $deptorequerimiento->IDDepto)
                                                          <td>{{$departamento->NMDepto}}</td>
                                                  @endif 
                                              @endforeach   
                                      @endif
                              @endforeach
                              <td>{{$requerimiento->FCIngreso}}</td>
                              <td>{{$requerimiento->FCRespuesta}}</td>
                              <td>{{$requerimiento->NRDiaatraso}}</td>
                              <td>{{$requerimiento->NRHh}}</td>
                              @if ($requerimiento->LGRespondido == 1)
                                  <td>Terminado</td>
                              @else
                                  <td>Pendiente</div></td>
                              @endif
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