<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuariodepto;
use App\Models\Departamento;

class UsuariodeptosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $usuariodeptos = Usuariodepto::all();
        $departamentos = Departamento::all();

        return view('admin.usuariodeptos.index', compact('usuarios','usuariodeptos','departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        $departamentos = Departamento::all();
        return view('admin.usuariodeptos.create', compact('usuarios','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuariodepto = Usuariodepto::create([
            'IDDepto' => $request->departamentos,
            'IDUsuario' => $request->usuarios
        ]);

        return redirect()->route('admin.usuariodeptos.index')->with('info','El requerimiento se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuariodepto $usuariodepto)
    {
        return view('admin.usuariodeptos.show', compact('usuariodepto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuariodepto $usuariodepto)
    {
        $usuarios = User::all();
        $departamentos = Departamento::all();

        return view('admin.usuariodeptos.edit', compact('usuarios','usuariodepto','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuariodepto $usuariodepto)
    {
        $usuariodepto->update([
            'IDDepto' => $request->departamento
        ]);

        return redirect()->route('admin.usuariodeptos.edit', $usuariodepto);
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
