<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Reporte de Consultas</title>
    <!--<style>
        #emp{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #emp td,#emp th{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        #emp tr:nth-child(even){
            background-color: #0bfdfd;
        }
        #emp th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
        }
    </style>-->
</head>
<body class="h-screen flex items-center justify-center" style="background: #edf2f7;">
    <br>
    <table class = "min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Código Solicitud</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Solicitante</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Forma Ingreso</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Clasificacion</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Departamento</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Fecha Ingreso</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Fecha Respuesta</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Días para responder</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">HH Utilizada</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Estado</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @forelse($requerimientos as $requerimiento)
                  <tr>
                      <td class="w-1/3 text-center py-3 px-4">{{$requerimiento->CDSolicitud}}</td>
                      @foreach ($clienterequerimientos as $clienterequerimiento)
                                @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                                     @foreach ($clientes as $cliente)
                                            @if (($cliente->id == $clienterequerimiento->IDCliente))
                                                    <td class="w-1/3 text-center py-3 px-4">{{$cliente->NMCliente}}</td>
                                            @endif 
                                        @endforeach   
                                @endif
                        @endforeach
                        @foreach ($formaingresos as $formaingreso)
                                @if ($formaingreso->IDFormaIngreso == $requerimiento->IDFormaIngreso)
                                    <td class="w-1/3 text-center py-3 px-4">{{$formaingreso->NMFormaIngreso}}</td>
                                @endif 
                        @endforeach
                        @foreach ($clasificaciones as $clasificacione)
                                @if ($clasificacione->IDClasificacion == $requerimiento->IDClasificacion)
                                    <td class="w-1/3 text-center py-3 px-4">{{$clasificacione->NMClasificacion}}</td>
                                @endif 
                        @endforeach
                        @foreach ($deptorequerimientos as $deptorequerimiento)
                                @if ($deptorequerimiento->IDRequerimiento == $requerimiento->id)
                                        @foreach ($departamentos as $departamento)
                                            @if ($departamento->IDDepto == $deptorequerimiento->IDDepto)
                                                    <td class="w-1/3 text-center py-3 px-4">{{$departamento->NMDepto}}</td>
                                            @endif 
                                        @endforeach   
                                @endif
                        @endforeach
                        <td class="w-1/3 text-center py-3 px-4">{{$requerimiento->FCIngreso}}</td>
                        <td class="w-1/3 text-center py-3 px-4">{{$requerimiento->FCRespuesta}}</td>
                        <td class="w-1/3 text-center py-3 px-4">{{$requerimiento->NRDiaatraso}}</td>
                        <td class="w-1/3 text-center py-3 px-4">{{$requerimiento->NRHh}}</td>
                        @if ($requerimiento->LGRespondido == 1)
                            <td class="w-1/3 text-left py-3 px-4">Terminado</td>
                        @else
                            <td class="w-1/3 text-left py-3 px-4">Pendiente</div></td>
                        @endif
                  </tr>
            @endforeach
        </tbody>
    </table>
    <button class = "bg-blue hover:bg-blue-dark txt-white font-bold py-2 px-4 rounded align-content:center">
        <a  href="{{ route('reportes.create') }}">Imprimir</a>
    </button>
</body>
</html>
</x-app-layout>









