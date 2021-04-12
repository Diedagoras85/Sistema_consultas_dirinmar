@extends('layouts.plantilla')
@section('title','Formulario Ingreso Solicitud')
@section('content')
         <h1>Formulario Ingreso Solicitud</h1>
         <form action="{{route('menu.store')}}" method="POST">         
            @csrf
            <Label>
                (*) Nº Solicitud:
                <input type="text" name="solicitud">                  
            </Label>
            <br>
            <br>
            <Label>
                (*) Nombre Solicitante:
                <input type="text" name="nombre">                  
            </Label>
            <br>
            <br>
            <Label>
                Run:
                <input type="text" name="run">                  
            </Label>
            <br>
            <br>
            <Label>
                (*) Correo Electrónico:
                 <input type="text" name = "email">
             </Label> 
            <br>
            <br>
            <Label>
                 Dirección:
                 <input type="text" name = "direccion">
             </Label> 
             <br>
             <br>
            <Label>
                 Teléfono:
                 <input type="tel" name = "fono">
             </Label> 
             <br>
            <br>
            <Label>
                 Movil:
                 <input type="tel" name = "movil">
             </Label> 
             <br>
            <br>
            <Label>
                 Empresa:
                 <input type="text" name = "empresa">
             </Label>
             <br>
            <br>
            <Label>
                País:
                <input type="text" name = "pais">
            </Label>
            <br>
           <br>
            <Label>
                (*) Fecha de Ingreso:
                 <input type="date" name = "fechaingreso">
             </Label>
             <br>
             <br>
             <Label>
                (*) Fecha de Respuesta:
                <input type="date" name = "fecharespuesta">
              </Label>
              <br>
              <br>
              <Label>
                (*) Departamento Responsable:
                <select name="depto1">
                  <option>Seleccione Departamento</option>
                  <option>Borde Costero</option>
                  <option>Buceo Profesional</option>
                  <option>CIMAR</option>
                  <option>Deportes Náuticos</option>
                  <option>Edytimar</option>
                  <option>Medio Ambiente</option>
                  <option>Gestión y Control</option>
                  <option>Pesca</option>
                  <option>Puertos</option>
                </select>    
            </Label>
            <br>
            <br>
            <Label>
                Departamento Involucrado:
                <select name="depto2">
                  <option>Seleccione Departamento</option>  
                  <option>Borde Costero</option>
                  <option>Buceo Profesional</option>
                  <option>CIMAR</option>
                  <option>Deportes Náuticos</option>
                  <option>Edytimar</option>
                  <option>Medio Ambiente</option>
                  <option>Gestión y Control</option>
                  <option>Pesca</option>
                  <option>Puertos</option>
                </select>    
            </Label>
            <br>
            <br>
            <label>
                (*) Forma de Ingreso:
                <select id="formaingreso" name="formaingreso">
                  <option value = 0>Seleccione Forma de Ingreso</option>  
                  <option value = 1>OIRS</option>  
                  <option value = 2>Mensaje Naval</option>
                  <option value = 3>E-Mail</option>
                  <option value = 4>Otro</option>
                </select>  
            </label>
            <br>
            <br>
            <label>
                (*) Clasificación:
                <select id="clasificacion" name="clasificacion">
                  <option value = 0>Seleccione Clasificación</option>  
                  <option value = 1>Consulta</option>
                  <option value = 2>Sugerencia</option>  
                  <option value = 3>Reclamo</option>
                  <option value = 4>Solicitud</option>
                  <option value = 5>Felicitación</option>
                  
                </select>  
            </label>
            <br>
            <br>
            <Label>
                (*) Solicitud:
                <textarea name="solicitud" rows="2"></textarea>                  
            </Label>     
            <br>
            <br>
            <Label>
                Subir archivo:
                <button name="archivo">Seleccionar archivo</button> No hay ningun archivo seleccionado                  
            </Label>     
            <br>
            <br>  
         <button type="submit">Ingresar Solicitud</button>
         <br>
         <br> 
         <button type="submit">Volver</button>         
      </form>
@endsection

