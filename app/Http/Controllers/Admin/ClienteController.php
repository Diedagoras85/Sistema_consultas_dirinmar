<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

//use App\Models\Clientemail;
//use App\Models\Email;
use App\Models\Paise;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $paises = Paise::all();

        return view('admin.clientes.index', compact('clientes', 'paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paise::all();
        return view('admin.clientes.create', compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente;
        /**$email2 = new Email();
        $cliemail = new Clientemail();**/
        
        $request->validate([
            'name'=>'required'
        ]);
        
        $clientes->NMCliente = $request->NMCliente;
        $clientes->NRRun = $request->NRRun;
        $clientes->NMDireccion = $request->NMDireccion;
        $clientes->NRTelefono = $request->NRTelefono;
        $clientes->NRMovil = $request->NRMovil;
        $clientes->GLEmpresa = $request->GLEmpresa;
        $clientes->GLCiudad = $request->GLCiudad;
        $clientes->IDPais = $request->IDPais;
        
        $clientes->save();
        
        /**$email2->NMEmail = $request->mail;
        $email2->save();

        $cliente1 = Cliente::latest('IDCliente')->first();
        $email1 = Email::latest('IDEmail')->first();

        $cliemail->IDCliente = $cliente1->IDCliente;
        $cliemail->IDEmail = $email1->IDEmail;

        $cliemail->save();**/

        return redirect()->route('admin.clientes.index')->with('info','El cliente se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('admin.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $Clientes)
    {
        $pais = Paise::all();
        return view('admin.clientes.edit', compact('cliente','pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'name' => 'required',
            'mail' => 'required'
        ]);

        $cliente->update([
            'NMCliente' => $request->name,
            'NRRun' => $request->run,
            'NMDireccion' => $request->direccion,
            'NRTelefono' => $request->fono,
            'NRMovil' => $request->movil,
            'GLEmpresa' => $request->empresa,
            'GLCiudad' => $request->ciudad,
            'IDPais' => $request ->pais
        ]);
        //$cliente->permissions()->sync($request->permissions);
        return redirect()->route('admin.clientes.edit', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('admin.clientes.index')->with('info', 'El cliente se eliminó con éxito');
    }
}
