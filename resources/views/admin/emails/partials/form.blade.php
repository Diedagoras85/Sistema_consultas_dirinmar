<div class="form-group">
    {!! Form::label('IDCliente', 'Nombre Solicitante: ') !!}
    <br>
    {!! Form::select('cliente', $clientes->pluck('NMCliente','id'), ['class'=> 'form-control']) !!}
    <br>
    {!! Form::label('NMEmail', 'Email: ') !!}
    {!! Form::email('NMEmail', null, ['class'=> 'form-control' . ($errors->has('NMEmail') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un Email']) !!}
    @error('NMEmail')
        <span class="invalid-feedback">
              <strong>{{$message}}</strong>
        </span>
    @enderror
</div>