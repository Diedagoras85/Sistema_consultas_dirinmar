<x-app-layout>
  <div class="flex container bg-gray-200 items-center justify-center  mt-8 mb-8">
    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
      <form action="{{url('enviar/')}}" method="POST">
        @csrf
            <div class="flex justify-center py-4">
              <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
              </div>
            </div>
            <div class="flex justify-center">
              <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Formulario de Respuesta de Requerimiento</h1>
              </div>
            </div>
            @foreach ($clienterequerimientos as $clienterequerimiento)
                      @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                           @foreach ($clientes as $cliente)
                                     @if ($cliente->id == $clienterequerimiento->IDCliente)
                                           <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
                                                    <input type ="text" readonly name="nombre" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->NMCliente}}"></>
                                                </div>   
                                                <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Identificacion</label>
                                                    <input type ="text" readonly name="run" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->NRRun}}"></>
                                                </div>
                                           </div> 
                                     @endif
                            @endforeach
                      @endif
            @endforeach              
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                @foreach ($clienterequerimientos as $clienterequerimiento)  
                          @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                              @foreach ($clientes as $cliente)
                                        @if ($cliente->id == $clienterequerimiento->IDCliente) 
                                              @foreach ($clientemails as $clientemail)
                                                        @if ($clientemail->IDCliente == $cliente->id)
                                                            @foreach ($emails as $email)
                                                                      @if ($email->id == $clientemail->IDEmail)
                                                                            <div class="grid grid-cols-1">
                                                                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Email</label>
                                                                                <input type ="text" readonly name="email" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$email->NMEmail}}"></>
                                                                            </div>
                                                                      @endif
                                                            @endforeach
                                                        @endif        
                                              @endforeach
                                        @endif
                              @endforeach
                          @endif
                @endforeach
                @foreach ($clienterequerimientos as $clienterequerimiento)
                      @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                           @foreach ($clientes as $cliente)
                                     @if ($cliente->id == $clienterequerimiento->IDCliente)
                                          <div class="grid grid-cols-1">
                                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Direccion</label>
                                                <input type ="text" readonly name="direccion" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->NMDireccion}}"></>
                                          </div>
                
                                     @endif
                            @endforeach
                      @endif
                @endforeach 
            </div> 
            @foreach ($clienterequerimientos as $clienterequerimiento)
                      @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                           @foreach ($clientes as $cliente)
                                     @if ($cliente->id == $clienterequerimiento->IDCliente)
                                           <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Telefono</label>
                                                    <input type ="text" readonly name="telefono" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->NRTelefono}}"></>
                                                </div>   
                                                <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Movil</label>
                                                    <input type ="text" readonly name="movil" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->NRMovil}}"></>
                                                </div>
                                           </div>
                                           <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                                <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Empresa</label>
                                                    <input type ="text" readonly name="empresa" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->GLEmpresa}}"></>
                                                </div>   
                                                <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Ciudad</label>
                                                    <input type ="text" readonly name="ciudad" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->GLCiudad}}"></>
                                                </div>
                                           </div> 
                                     @endif
                            @endforeach
                      @endif
            @endforeach
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                @foreach ($clienterequerimientos as $clienterequerimiento)
                          @if ($clienterequerimiento->IDRequerimiento == $requerimiento->id)
                              @foreach ($clientes as $cliente)
                                        @if ($cliente->id == $clienterequerimiento->IDCliente)
                                              <div class="grid grid-cols-1">
                                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Pais</label>
                                                    <input type ="text" readonly name="pais" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$cliente->NMPais}}"></>
                                              </div>
                                        @endif
                                @endforeach
                          @endif
                @endforeach
                <div class="grid grid-cols-1">
                  <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">IDConsulta</label>
                  <input type ="text" readonly name="idconsulta" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$requerimiento->CDSolicitud}}"></>
                </div>
            </div>                          
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                  <div class="grid grid-cols-1">
                       <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha Ingreso</label>
                       <input type ="text" readonly name="fcingreso" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$requerimiento->FCIngreso}}"></>
                  </div>   
                  <div class="grid grid-cols-1">
                       <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha Respuesta</label>
                       <input name="fechater" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" value="<?php echo date('Y-m-d'); ?>"/>
                  </div>
            </div>
            @foreach ($deptorequerimientos as $deptorequerimiento)
                    @if ($deptorequerimiento->IDRequerimiento == $requerimiento->id)
                        @foreach ($departamentos as $departamento)
                            @if ($departamento->IDDepto == $deptorequerimiento->IDDepto)
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                      <div class="grid grid-cols-1">
                                          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Departamento Asignado</label>
                                          <input type ="text" readonly name="depto1" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$departamento->NMDepto}}"></>
                                      </div>   
                                      <div class="grid grid-cols-1">
                                          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Departamento Involucrado</label>
                                          <input type ="text" readonly name="depto2" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$departamento->NMDepto}}"></>
                                      </div>
                                </div>
                            @endif
                        @endforeach
                    @endif        
            @endforeach
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                  @foreach ($formaingresos as $formaingreso)
                          @if ($formaingreso->IDFormaIngreso == $requerimiento->IDFormaIngreso)
                              <div class="grid grid-cols-1">
                                  <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Forma Ingreso</label>
                                  <input type ="text" readonly name="forma" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$formaingreso->NMFormaIngreso}}"></>
                              </div>
                          @endif        
                  @endforeach
                  @foreach ($clasificaciones as $clasificacione)
                          @if ($clasificacione->IDClasificacion == $requerimiento->IDClasificacion)
                              <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Clasificacion</label>
                                    <input type ="text" readonly name="clasificacion" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$clasificacione->NMClasificacion}}"></>
                              </div>
                          @endif        
                  @endforeach
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Consulta</label>
                <textarea name="consulta" readonly class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">{{$requerimiento->GLRequerimiento}}</textarea>
            </div>
            @if ($requerimiento->LGRespondido == 0)
                  <div class="grid grid-cols-1 mt-5 mx-7">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Ingrese Respuesta</label>
                      <textarea name="respuesta" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="textarea"></textarea>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">HH Utilizadas</label>
                      <select name="hh" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option selected> </option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                      </select>
                    </div>  
                  </div>
            @else
                    <div class="grid grid-cols-1 mt-5 mx-7">
                      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Respuesta</label>
                      <textarea name="respuesta" readonly class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">{{$requerimiento->GLRespuesta}}</textarea>
                    </div> 
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">HH Utilizadas</label>
                            <input type ="text" readonly name="hh" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{$requerimiento->NRHh}}"></>
                        </div>
                    </div>    
            @endif      
            <div class="grid grid-cols-1 mt-5 mx-7">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Seleccione Archivo</label>
                <div class='flex items-center justify-center w-full'>
                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                          <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                          <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Pulse aquí</p>
                        </div>
                      <input type='file' class="hidden" />
                    </label>
                </div>
            </div>
            @if ($requerimiento->LGRespondido == 0)
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button type="submit" class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Responder</a>
                </div>
            @else
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                  <a class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2" href="/welcome">Volver</a>
                </div>
            @endif
      </form>    
    </div>
  </div>
</x-app-layout>