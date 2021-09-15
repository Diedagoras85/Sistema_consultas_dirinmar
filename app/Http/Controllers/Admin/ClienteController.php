<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

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

        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.create');
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
            'NMCliente'=>'required'
        ]);

        $Cliente = Cliente::create([
            'NMCliente' => $request->NMCliente,
            'NRRun' => $request->NRRun,
            'NMDireccion' => $request->NMDireccion,
            'NRTelefono' => $request->NRTelefono,
            'NRMovil' => $request->NRMovil,
            'GLEmpresa' => $request->GLEmpresa,
            'GLCiudad' => $request->GLCiudad,
            'NMPais' => $request->NMPais
        ]);

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
    public function edit(Cliente $cliente)
    {

        return view('admin.clientes.edit', compact('cliente'));
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
            'NMCliente' => 'required'
        ]);

        $cliente->update([
            'NMCliente' => $request->NMCliente,
            'NRRun' => $request->NRRun,
            'NMDireccion' => $request->NMDireccion,
            'NRTelefono' => $request->NRTelefono,
            'NRMovil' => $request->NRMovil,
            'GLEmpresa' => $request->GLEmpresa,
            'GLCiudad' => $request->GLCiudad,
            'NMPais' => $request ->NMPais
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
