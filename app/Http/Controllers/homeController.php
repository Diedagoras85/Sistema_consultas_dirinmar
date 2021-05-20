<?php

namespace App\Http\Controllers;

use App\Models\Clasificacione;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Email;
use App\Models\Formaingreso;
use App\Models\Paise;
use App\Models\Requerimiento;

use Illuminate\Http\Request;

//use Illuminate\Contracts\Auth\Authenticatable;


class HomeController extends Controller
{
    public function __invoke()
    {
        //$requerimientos = Requerimiento::where("LGRespondido","0")->get();
        //,compact('requerimientos'
        
        return view('welcome');
    }

    public function index(){
        $paises = Paise::All();
        $formaingresos = Formaingreso::All();
        $clasificaciones = Clasificacione::All();
        $departamentos = Departamento::All();
        $involucrados = Departamento::All();

        return view('ingresar.index', compact('paises','formaingresos','clasificaciones','departamentos','involucrados'));
    }

    public function store(Request $request){

        $cliente = new Cliente();
        $email = new Email();
        $requerimiento = new Requerimiento();


        $cliente->NMCliente = $request->nombre;
        $cliente->NRRun = $request->run;
        $cliente->NMDireccion = $request->direccion;
        $cliente->NRTelefono = $request->telefono;
        $cliente->NRMovil = $request->movil;
        $cliente->GLEmpresa = $request->empresa;
        $cliente->GLCiudad = $request->ciudad;
        $cliente->IDPais = $request->pais;
        

        $cliente->save();
        
        $cliente1 = Cliente::latest('IDCliente')->first();;

        $email->IDCliente = $cliente1->IDCliente;
        $email->NM_Email = $request->email;

        $email->save();
        
        $requerimiento->IDCliente = $cliente1->IDCliente;
        $requerimiento->CDSolicitud = $request->idconsulta;
        $requerimiento->GLRequerimiento = $request->consulta;
        $requerimiento->IDClasificacion = $request->clasificacion;
        $requerimiento->FCIngreso = $request->fechaing;
        $requerimiento->FCRespuesta = $request->fechater;
        $requerimiento->IDDepto = $request->depto1;
        $requerimiento->IDDepto2 = $request->depto2;
        $requerimiento->IDFormaIngreso = $request->forma;

        $requerimiento->save();

        return redirect()->route('home');
    }

}
