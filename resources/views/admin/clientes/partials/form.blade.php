<div class="form-group">
    {!! Form::label('NMCliente', 'Nombre: ') !!}
    {!! Form::text('NMCliente', null, ['class'=> 'form-control' . ($errors->has('NMCliente') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre']) !!}
    {!! Form::label('NRRun', 'Run: ') !!}
    {!! Form::text('NRRun', null, ['class'=> 'form-control', 'placeholder' => 'Escriba un run 01234567-8']) !!}
    {!! Form::label('NMDireccion', 'Direccion: ') !!}
    {!! Form::text('NMDireccion', null, ['class'=> 'form-control', 'placeholder' => 'Escriba una direccion']) !!}
    {!! Form::label('NRTelefono', 'Telefono: ') !!}
    {!! Form::text('NRTelefono', null, ['class'=> 'form-control', 'placeholder' => 'Escriba un numero de telefono']) !!}
    {!! Form::label('NRMovil', 'Movil: ') !!}
    {!! Form::text('NRMovil', null, ['class'=> 'form-control', 'placeholder' => 'Escriba un numero movil']) !!}
    {!! Form::label('GLEmpresa', 'Empresa: ') !!}
    {!! Form::text('GLEmpresa', null, ['class'=> 'form-control', 'placeholder' => 'Escriba una empresa']) !!}
    {!! Form::label('GLCiudad', 'Ciudad: ') !!}
    {!! Form::text('GLCiudad', null, ['class'=> 'form-control', 'placeholder' => 'Escriba una ciudad']) !!}
    <strong>Paises</strong>
    <br>
    {!! Form::select('IDPais', $paises->pluck('NMNombre', 'IDPais'), null, ['class'=> 'form-control']) !!}
    @error('NMCliente')
        <span class="invalid-feedback">
              <strong>{{$message}}</strong>
        </span>
    @enderror

 </div>