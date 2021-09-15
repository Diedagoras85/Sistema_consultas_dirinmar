<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        
    </style>
    <title>Reporte de consultas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th class="text-center text-blue-600">Código Solicitud</th>
                <th class="text-center text-blue-600" >Solicitante</th>
                <th class="text-center text-blue-600">Forma Ingreso</th>
                <th class="text-center text-blue-600">Clasificacion</th>
                <th class="text-center text-blue-600">Departamento</th>
                <th class="text-center text-blue-600">Fecha Ingreso</th>
                <th class="text-center text-blue-600">Fecha Respuesta</th>
                <th class="text-center text-blue-600">Días para responder</th>
                <th class="text-center text-blue-600">HH Utilizada</th>
                <th class="text-center text-blue-600">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($requerimientos as $requerimiento)
                  <tr>
                      <td class="text-center">{{$requerimiento->CDSolicitud}}</td>
                      @foreach ($clienterequerimientos as $clienterequerimiento)
                                @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                                     @foreach ($clientes as $cliente)
                                            @if (($cliente->id == $clienterequerimiento->IDCliente))
                                                    <td class="text-center">{{$cliente->NMCliente}}</td>
                                            @endif 
                                        @endforeach   
                                @endif
                        @endforeach
                        @foreach ($formaingresos as $formaingreso)
                                @if ($formaingreso->IDFormaIngreso == $requerimiento->IDFormaIngreso)
                                    <td class="text-center">{{$formaingreso->NMFormaIngreso}}</td>
                                @endif 
                        @endforeach
                        @foreach ($clasificaciones as $clasificacione)
                                @if ($clasificacione->IDClasificacion == $requerimiento->IDClasificacion)
                                    <td class="text-center">{{$clasificacione->NMClasificacion}}</td>
                                @endif 
                        @endforeach
                        @foreach ($deptorequerimientos as $deptorequerimiento)
                                @if ($deptorequerimiento->IDRequerimiento == $requerimiento->id)
                                        @foreach ($departamentos as $departamento)
                                            @if ($departamento->IDDepto == $deptorequerimiento->IDDepto)
                                                    <td class="text-center">{{$departamento->NMDepto}}</td>
                                            @endif 
                                        @endforeach   
                                @endif
                        @endforeach
                        <td class="text-center">{{$requerimiento->FCIngreso}}</td>
                        <td class="text-center">{{$requerimiento->FCRespuesta}}</td>
                        <td class="text-center">{{$requerimiento->NRDiaatraso}}</td>
                        <td class="text-center">{{$requerimiento->NRHh}}</td>
                        @if ($requerimiento->LGRespondido == 1)
                            <td class="text-center">Terminado</td>
                        @else
                            <td class="text-center">Pendiente</div></td>
                        @endif
                  </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>