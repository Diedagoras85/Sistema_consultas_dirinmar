@extends('adminlte::page')

@section('title', 'Sistema de Consultas Dirinmar')

@section('content_header')
    <h1>Ingresar Nuevo Requerimiento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.requerimientos.store']) !!}
               
               @include('admin.requerimientos.partials.form')
               
               {!! Form::submit('Ingresar requerimiento', ['class'=>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

        function countWorkDay(sDay, eDay){
            var s = stringToDate(sDay), e = stringToDate(eDay);
            var s_t_w = s.getDay(), e_t_w = e.getDay();

                // Diferencia en días
            var diffDay = (e - s) / (1000 * 60 * 60 * 24) + 1;
            var diffWeekDay = diffDay - (s_t_w ==0?0:7-s_t_w) + e_t_w;
                // El cálculo tiene varias semanas completas
            var weeks = Math.floor(diffWeekDay/7);
                if (weeks <= 0) {// En la misma semana, es decir, la hora de inicio y finalización no puede ser el domingo y el sábado (el domingo es el primer día de la semana)
            return e_t_w-s_t_w+(s_t_w?1:0)+(e_t_w==6?-1:0);
            }else{
                return weeks*5 + (e_t_w==6?5:e_t_w) + ( s_t_w >= 1 && s_t_w <= 5 ? (6-s_t_w):0);
            }
        } 
    </script>

    <script> console.log('Hi!'); </script>
@stop