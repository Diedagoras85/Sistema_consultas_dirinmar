<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requerimiento;
use App\Models\Formaingreso;
use App\Models\Clasificacione;
use App\Models\Clientesrequerimiento;
use App\Models\Cliente;
use App\Models\Adjunto;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecibirRequerimiento;
use App\Models\Departamento;
use App\Models\Deptorequerimiento;
use App\Models\User;
use App\Models\Usuariodepto;
use Illuminate\Support\Arr;

class RequerimientoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos = Requerimiento::all();
        $formas = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $clientereqs = Clientesrequerimiento::all();
        $clientes = Cliente::all();
        $departamentos = Departamento::all();
        $deptoreqs = Deptorequerimiento::all();
        return view('admin.requerimientos.index', compact('requerimientos','formas','clasificaciones','clientereqs','clientes','departamentos','deptoreqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requerimientos = Requerimiento::all();
        $formas = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $clientes = Cliente::all();
        $departamentos = Departamento::all();
        return view('admin.requerimientos.create', compact('requerimientos','formas','clasificaciones','clientes','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $request->validate([
            'CDSolicitud' => 'required',
            'GLRequerimiento' => 'required'
        ]);
        
        $requerimiento = Requerimiento::create([
            'CDSolicitud' => $request->CDSolicitud,
            'GLRequerimiento' => $request->GLRequerimiento,
            'IDClasificacion' => $request->clasificacione,
            'FCIngreso' => $request->FCIngreso,
            'FCRespuesta' => $request->FCRespuesta,
            'IDFormaIngreso' => $request->forma,
            'LGRespondido' => 'False',
            'NRDiaatraso' =>  '20',
            'NRHh' => '0'
        ]);
        $requerimiento1 = Requerimiento::latest('id')->first();

        /**if (is_null ($request->Adjunto)){
            }
        else {   
            $contenidoArchivo = file_get_contents($request->Adjunto);
            $imagenBase64 = base64_encode($contenidoArchivo); 
            $adjunto = Adjunto::create([
                'IDRequerimiento' => $requerimiento1->id,
                'Adjunto' => $imagenBase64
            ]);
            }*/
        
        $deptorequerimiento = Deptorequerimiento::create([
              'IDRequerimiento' => $requerimiento1->id,
              'IDDepto' => $request->departamento
        ]);

        $clientesrequerimiento = Clientesrequerimiento::create([
              'IDCliente' => $request->cliente,
              'IDRequerimiento' => $requerimiento1->id
        ]);

        //Envio de correo notificando ingreso de requerimiento

        $mail = new RecibirRequerimiento($requerimiento);

        $usuariodeptos = Usuariodepto::all();
        $users = User::all();
        $correo = [];
        foreach ($usuariodeptos as $usuariodepto) {
            if ($usuariodepto->IDDepto == $request->departamento) {
                foreach ($users as $user) {
                    if ($user->id == $usuariodepto->IDUsuario){
                        $correo = Arr::add($correo, 'correo' ,$user->email);
                    }
                }
            } 
        }
        
        Mail::to($correo)->send($mail);

        return redirect()->route('admin.requerimientos.index')->with('info','El requerimiento se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Requerimiento $requerimiento)
    {
        return view('admin.requerimientos.show', compact('requerimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Requerimiento $requerimiento)
    {
        $formas = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $clientes = Cliente::all();
        $departamentos = Departamento::all();
        $clientesrequerimientos = Clientesrequerimiento::all();
        $deptorequerimientos = Deptorequerimiento::all();
        return view('admin.requerimientos.edit', compact('requerimiento','formas','clasificaciones','clientes','departamentos','clientesrequerimientos','deptorequerimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        $request->validate([
            'CDSolicitud' => 'required',
            'GLRequerimiento' => 'required'
        ]);

        $requerimiento->update([
            'CDSolicitud' => $request->CDSolicitud,
            'GLRequerimiento' => $request->GLRequerimiento,
            'IDClasificacion' => $request->clasificacione,
            'FCIngreso' => $request->FCIngreso,
            'FCRespuesta' => $request->FCRespuesta,
            'IDFormaIngreso' => $request->forma,
        ]);

        return redirect()->route('admin.requerimientos.edit', $requerimiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
