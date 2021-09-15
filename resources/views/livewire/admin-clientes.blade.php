<div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.clientes.create')}}">Crear nuevo Cliente</a>
            <br>
            <br>
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="Escriba un nombre">
        </div>
        @if ($clientes->count())
            
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Run</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Movil</th>
                            <th>Empresa</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Accion</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->NMCliente}}</td>
                                    <td>{{$cliente->NRRun}}</td>
                                    <td>{{$cliente->NMDireccion}}</td>
                                    <td>{{$cliente->NRTelefono}}</td>
                                    <td>{{$cliente->NRMovil}}</td>
                                    <td>{{$cliente->GLEmpresa}}</td>
                                    <td>{{$cliente->GLCiudad}}</td>
                                    <td>{{$cliente->NMPais}}</td>
                                    <td width="10px">
                                        <a class="btn btn-secondary" href="{{route('admin.clientes.edit', $cliente->id)}}">Editar</a>
                                    </td>   
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$clientes->links()}}
            </div>
        
        @else
            <div class="card-body">
                <strong>No hay ningun cliente registrado</strong>
            </div>
        @endif

    </div>
</div>
