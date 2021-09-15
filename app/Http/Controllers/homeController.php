<?php

namespace App\Http\Controllers;

use App\Models\Clasificacione;
use App\Models\Cliente;
use App\Models\Clientemail;
use App\Models\Departamento;
use App\Models\Email;
use App\Models\Formaingreso;
use App\Models\Paise;
use App\Models\Requerimiento;
use App\Models\Deptorequerimiento;
use App\Models\Clientesrequerimiento;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarRequerimiento;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

//use Illuminate\Contracts\Auth\Authenticatable;


class HomeController extends Controller
{
    public function __invoke()
    {

        $requerimientos = Requerimiento::all();
        $clientes = Cliente::all();
        $formaingresos = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $departamentos = Departamento::all();
        $deptorequerimientos = Deptorequerimiento::all();
        $clienterequerimientos = Clientesrequerimiento::all();
        
        return view('welcome', compact('requerimientos','clientes','formaingresos','clasificaciones','departamentos','deptorequerimientos','clienterequerimientos'));
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
        $cliente->GLPais = $request->pais;
        

        $cliente->save();
        
        $cliente1 = Cliente::latest('IDCliente')->first();

        $email->IDCliente = $cliente1->IDCliente;
        $email->NMEmail = $request->email;

        $email->save();
        
        $requerimiento->CDSolicitud = $request->idconsulta;
        $requerimiento->GLRequerimiento = $request->consulta;
        $requerimiento->IDClasificacion = $request->clasificacion;
        $requerimiento->FCIngreso = $request->fechaing;
        $requerimiento->FCRespuesta = $request->fechater;
        $requerimiento->IDDepto = $request->depto1;
        $requerimiento->IDDepto2 = $request->depto2;
        $requerimiento->IDFormaIngreso = $request->forma;
        $requerimiento->NRHh = 0;

        $requerimiento->save();

        return redirect()->route('home');
    }
    
    Public function edit(Requerimiento $requerimiento){
        
        $clientes = Cliente::all();
        $formaingresos = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $departamentos = Departamento::all();
        $deptorequerimientos = Deptorequerimiento::all();
        $clienterequerimientos = Clientesrequerimiento::all();
        $emails = Email::all();
        $clientemails = Clientemail::all();
        return view('ingresar.edit', compact('requerimiento','clientes','formaingresos','clasificaciones','departamentos','deptorequerimientos','clienterequerimientos','emails','clientemails'));
    }

    public function update(Request $request, Requerimiento $requerimiento)
    {
        
        $requerimiento = Requerimiento::where('CDSolicitud','=',$request->idconsulta);

        $requerimiento->update([
            'GLRespuesta' => $request->respuesta,
            'NRHh' => $request->hh,
            'LGRespondido' => 1
        ]);

        //Envio de correo notificando ingreso de requerimiento
        $requerimiento1 = new Requerimiento();

        $requerimiento1->CDSolicitud = $request->idconsulta;
        $requerimiento1->GLRespuesta = $request->respuesta;

        $mail = new EnviarRequerimiento($requerimiento1);
        $correo = $request->email;
                
        Mail::to($correo)->send($mail);

        return redirect()->route('home');

    }
}
