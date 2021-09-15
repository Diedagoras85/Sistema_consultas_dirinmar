<div class="form-group">
    {!! Form::label('IDUsuario', 'Nombre Usuario: ') !!}
    <br>
    {!! Form::select('usuario', $usuarios->pluck('name','id'), ['class'=> 'form-control']) !!}
    <br>
    {!! Form::label('IDDepto', 'Departamento: ') !!}
    <br>
    {!! Form::select('departamento', $departamentos->pluck('NMDepto','IDDepto'), ['class'=> 'form-control']) !!}
</div>