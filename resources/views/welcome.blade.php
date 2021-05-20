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
                   <th class="p-1 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Id Solicitud
                      <div>  
                   </th>
                   <th class="p-1 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Nombre Solicitante
                      <div>  
                   </th>
                   <th class="p-2 border-r  text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Forma de Ingreso
                      <div>  
                   </th>
                   <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Nombre Solicitante
                      <div>  
                   </th>
                   <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                         Fecha Ingreso
                      <div>  
                   </th>
                   <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Fecha Respuesta
                      <div>  
                   </th>
                   <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Departamento
                      <div>  
                   </th>
                   <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Estado
                      <div>  
                   </th>
                   <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Detalle
                      <div>  
                    </th>  
                </tr>
              </thead>
              {{--<tbody>
                @foreach($monedas as $moneda)
                    <tr>
                        <td class="text-center">{{ $moneda->idcurrency}}</td>
                        <td class="text-center">{{ $moneda->currency}}</td>
                        <td class="text-center">{{ $moneda->description }}</td>
                        <td class="text-center">{{ $moneda->isactive}}</td>
                        <td>
                            <a href="{{ route('monedas.show', $moneda->idcurrency) }}" class="btn btn-info">Ver</a>
            
                        </td>
                    </tr>
                @endforeach
              </tbody>--}}
              {{--<tfoot>
                <tr>
                  <th class="text-center">Id moneda</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Descripción</th>
                  <th class="text-center">Fecha</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </tfoot>--}}
            </table>
          </div>
     </section>      

</x-app-layout>    

