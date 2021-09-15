<div class="form-group">
    {!! Form::label('CDSolicitud', 'IDSolicitud: ') !!}
    {!! Form::text('CDSolicitud', null, ['class'=> 'form-control' . ($errors->has('CDSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'ID Solicitud']) !!}
    @error('CDSolicitud')
        <span class="invalid-feedback">
              <strong>{{$message}}</strong>
        </span>
    @enderror
    {!! Form::label('IDCliente', 'Nombre Solicitante: ') !!}
    <br>
    {!! Form::select('cliente', $clientes->pluck('NMCliente','id'), ['class'=> 'form-control']) !!}
    <br>
    {!! Form::label('IDDepto', 'Departamento: ') !!}
    <br>
    {!! Form::select('departamento', $departamentos->pluck('NMDepto','IDDepto'), ['class'=> 'form-control']) !!}
    <br>
    {!! Form::label('IDFormaIngreso', 'Forma de Ingreso: ') !!}
    <br>
    {!! Form::select('forma', $formas->pluck('NMFormaIngreso','IDFormaIngreso'), ['class'=> 'form-control']) !!}
    <br>
    {!! Form::label('IDClasificacion', 'Clasificacion: ') !!}
    <br>
    {!! Form::select('clasificacione', $clasificaciones->pluck('NMClasificacion','IDClasificacion'), ['class'=> 'form-control']) !!}
    <br>
    {!! Form::label('FCIngreso', 'Fecha de Ingreso: ') !!}
    <br>
    {!! Form::date('FCIngreso', \Carbon\Carbon::now(),['class'=> 'form-control']) !!}
    {!! Form::label('FCRespuesta', 'Fecha de Respuesta: ') !!}
    <br>
    {!! Form::date('FCRespuesta', \Carbon\Carbon::now(),['class'=> 'form-control']) !!}
    {!! Form::label('GLRequerimiento', 'Ingrese requerimiento: ') !!}
    {!! Form::textarea('GLRequerimiento', null, ['class'=>'form-control', 'placeholder' => 'Escriba su consulta aquí']) !!}
    @error('GLRequerimiento')
        <span class="invalid-feedback">
              <strong>{{$message}}</strong>
        </span>
    @enderror
    {!! Form::label('Adjunto', 'Seleccione Archivo: ') !!}
    {!! Form::file('Adjunto', ['class'=>'form-control', 'placeholder' => 'Seleccione archivo']) !!}
</div>