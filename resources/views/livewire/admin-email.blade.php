<div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.emails.create')}}">Crear nuevo Email</a>
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
                            <th>Email</th>
                            <th>Nombre</th>
                            <th>Accion</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($emails as $email)
                            <tr>
                                <td>{{$email->id}}</td>
                                <td>{{$email->NMEmail}}</td>
                                @foreach ($clientemails as $clientemail)
                                    @if ($clientemail->IDEmail == $email->id)
                                         @foreach ($clientes as $cliente)
                                              @if ($cliente->id == $clientemail->IDCliente)
                                                    <td>{{$cliente->NMCliente}}</td>
                                              @endif
                                         @endforeach    
                                    @endif
                                @endforeach
                                <td width="10px">
                                    <a class="btn btn-secondary" href="{{route('admin.emails.edit', $email->id)}}">Editar</a>
                                </td>
                            </tr>
                        @empty 
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$clientes->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay ningun Email registrado</strong>
            </div>
        @endif

    </div>
</div>
