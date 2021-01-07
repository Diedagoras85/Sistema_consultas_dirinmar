@extends('layouts.plantilla')
@section('title','Formulario Ingreso Solicitud')
@section('content')
         <h1>Formulario Ingreso Solicitud</h1>
         <!--form action="{{route('menu.index')}}" method="POST"-->
         
            @csrf
            <Label>
                Nº Solicitud:
                <input type="text" name="solicitud">                  
            </Label>
            <br>
            <br>
            <Label>
                Nombre Solicitante:
                <input type="text" name="nombre">                  
            </Label>
            <br>
            <br>
            <Label>
                Run:
                <input type="text" name="run">
                -
                <input type="text" name="dv" height="1" width="1" size="1">                   
            </Label>
            <br>
            <br>
            <Label>
                 Correo Electrónico:
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
                 Fecha de Ingreso:
                 <input type="datetime" name = "fechaingreso">
             </Label>
             <br>
             <br>
             <Label>
                Fecha de Respuesta:
                <input type="datetime" name = "fecharespuesta">
              </Label>
              <br>
              <br>
              <Label>
                Departamento Responsable:
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
                Forma de Ingreso:
                <select name="formaingreso">
                  <option>OIRS</option>  
                  <option>Mensaje Naval</option>
                  <option>E-Mail</option>
                  <option>Oficio</option>
                  <option>Carta</option>
                  <option>Otro</option>
                </select>  
            </label>
            <br>
            <br>
            <label>
                Forma de Ingreso:
                <select name="formaingreso">
                  <option>Consulta</option>  
                  <option>Reclamo</option>
                  <option>Felicitación</option>
                  <option>Sugerencia</option>
                </select>  
            </label>
            <br>
            <br>
            <Label>
                Solicitud:
                <textarea name="Solicitud" rows="2"></textarea>                  
            </Label>     
            <br>
            <br>  
         <button type="submit">Ingresar Solicitud</button>

      </form>
@endsection

