@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')
         <h1>Login principal</h1>
         <form action="{{route("menu.ingresar")}}" method="POST">

               @csrf
               
               <Label>
                   Usuario:
                   <input type="text" name="rut">
                   -
                   <input type="text" name="dv" height="1" width="1" size="1">                   
               </Label>
               <br>
               <br>
               <Label>
                Contraseña:
                <input type="password" name = "contrasena">
                
            </Label> 
             <br>
             <br>
            <button type="submit">Ingresar</button>

         </form>
@endsection
