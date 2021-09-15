@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Editar Email</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($email, ['route' => ['admin.emails.update', $email], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('NMCliente', 'Nombre Solicitante: ') !!}
                    @foreach ($clientemails as $clientemail)
                        @if ($clientemail->IDEmail == $email->id)
                            @foreach ($clientes as $cliente)
                                @if ($cliente->id == $clientemail->IDCliente)
                                    <p class="form-control">{{$cliente->NMCliente}}</p>
                                @endif
                            @endforeach
                        @endif        
                    @endforeach
                {!! Form::label('NMEmail', 'Email: ') !!}
                {!! Form::email('NMEmail', $email->NMEmail, ['class'=> 'form-control']) !!}
                @error('NMEmail')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            {!! Form::submit('Actualizar Email', ['class'=>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop