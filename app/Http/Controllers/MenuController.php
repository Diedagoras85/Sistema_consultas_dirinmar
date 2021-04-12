<?php

namespace App\Http\Controllers;

//use App\Models\User;

use App\Models\Requerimiento;
use App\Models\Usuario;
use App\Models\Email;
use App\Models\Adjunto;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    //
    public function __invoke()
    {
        return view('menu.index');
    }

    /*public function ingresar(Request $request) {
        
        $ingreso = new Requerimiento();
        $ingreso->name = $request->name; 
        //return view('menu.index');
    }*/
    public function index(){
        return view('menu.index');
    }

    public function create(){
        return view('menu.formulario');
    }
    
    public function store(Request $request){
        $Usuario = new Usuario();
        $Requerimiento = new Requerimiento();
        $Email = new Email();
        $Adjunto = new Adjunto(); 
        
        $Usuario->NMCliente = $request->nombre;
        $Usuario->NRRun = $request->run;
        $Email->GLEmail = $request->email;
        $Usuario->NMDireccion = $request->direccion;
        $Usuario->NRTelefono = $request->fono;
        $Usuario->NRMovil = $request->movil;
        $Usuario->GLEmpresa = $request->empresa;
        $Usuario->IDPais = $request->pais;
        $Requerimiento->CDSolicitud = $request->solicitud;
        $Requerimiento->GLRequerimiento = $request->solicitud;
        $Requerimiento->IDClasificacion = $request->clasificacion;
        $Requerimiento->FCIngreso = $request->fechaingreso;
        $Requerimiento->FCRespuesta = $request->fecharespuesta;
        $Requerimiento->IDFormaIngreso = $request->formaingreso;
        $Requerimiento->LGRespondido = 0;
        $Adjunto->IDRequerimiento = $request->solicitud;
        $Adjunto->Adjunto = $request->archivo;
        
        $Usuario->save();
        $Email->save();
        $Requerimiento->save();
        $Adjunto->save();
    }

    public function show(){
       
        return view('menu.mail');
    }   
}
