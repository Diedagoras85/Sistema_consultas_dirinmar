<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        return "Ud se encuentra en el Menú Principal";
    }

    public function create(){
        return "Ud se encuentra en el formulario de ingreso de solicitud";
    }

    public function show(){
       
       return "Ud se encuentra en la sección de envío de correo";
    }   
}
