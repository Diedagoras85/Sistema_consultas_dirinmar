<x-app-layout>

     <section class= "bg-cover" style="background-color:lightskyblue">
          <div class= "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="w-full mdw:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Sistema de Consultas Dirinmar</h1>
                <p class="text-white text-lg mt-2">Reporte de consultas</p>
              </div>
          </div> 
            
     </section>
     <section class="mt-1">    
        <div class="table-fixed p-20">
          <table class="w-full border-separate">
             <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Id</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Estado</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Solicitante</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Forma Ingreso</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Clasificacion</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Departamento</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Fecha Ingreso</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Fecha Respuesta</div></th>
                    <th class="p-1 border-r text-sm font-thin text-gray-700">
                      <div class="flex items-center justify-center">Funciones</div></th>
                </tr>
              </thead>
              <tbody>
                 @forelse($requerimientos as $requerimiento)
                    <tr>
                        <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                          <div class="flex items-center justify-center">{{$requerimiento->CDSolicitud}}</div></td>
                        @if ($requerimiento->LGRespondido == 1)
                        <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 120 120"><circle cx="60" cy="60" r="10" fill="green" />
                            </svg></td>
                        @else
                            <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" 
                                      viewBox="0 0 120 120"><circle cx="60" cy="60" r="10" fill="yellow" />
                                </svg></td>
                        @endif
                        @foreach ($clienterequerimientos as $clienterequerimiento)
                                @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                                      @foreach ($clientes as $cliente)
                                            @if (($cliente->id == $clienterequerimiento->IDCliente))
                                                  <td class="p-1 border-r border-l text-sm font-thin text-gray-500">
                                                    <div class="flex items-center justify-center">{{$cliente->NMCliente}}</div></td>
                                            @endif 
                                      @endforeach   
                                @endif
                        @endforeach
                        @foreach ($formaingresos as $formaingreso)
                              @if ($formaingreso->IDFormaIngreso == $requerimiento->IDFormaIngreso)
                                  <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">{{$formaingreso->NMFormaIngreso}}</div></td>
                              @endif 
                        @endforeach
                        @foreach ($clasificaciones as $clasificacione)
                              @if ($clasificacione->IDClasificacion == $requerimiento->IDClasificacion)
                                    <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                                      <div class="flex items-center justify-center">{{$clasificacione->NMClasificacion}}</div></td>
                              @endif 
                        @endforeach
                        @foreach ($deptorequerimientos as $deptorequerimiento)
                                @if ($deptorequerimiento->IDRequerimiento == $requerimiento->id)
                                      @foreach ($departamentos as $departamento)
                                            @if ($departamento->IDDepto == $deptorequerimiento->IDDepto)
                                                  <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                                                    <div class="flex items-center justify-center">{{$departamento->NMDepto}}</div></td>
                                            @endif 
                                      @endforeach   
                                @endif
                        @endforeach
                        <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                          <div class="flex items-center justify-center">{{$requerimiento->FCIngreso}}</div></td>
                        <td class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                            <div class="flex items-center justify-center">{{$requerimiento->FCRespuesta}}</div></td>
                        <td width="10px" class="p-1 border-r border-l border-t text-sm font-thin text-gray-500">
                            <a class="btn btn-info" href="{{ route('ingresar.edit', $requerimiento) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
     </section>

</x-app-layout>