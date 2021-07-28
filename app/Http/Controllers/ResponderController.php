<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacione;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Email;
use App\Models\Formaingreso;
use App\Models\Paise;
use App\Models\Requerimiento;
use App\Models\Deptorequerimiento;
use App\Models\Clientesrequerimiento;

class ResponderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($requerimiento)
    {
        
        $r = Clientesrequerimiento::select('IDCliente')->where('IDRequerimiento',$requerimiento)->first();
        $n = Cliente::select('NMCliente')->where('IDCliente',$r)->first();
        //$p = Requerimiento::select('IDPais')->where('IDRequerimiento', $requerimiento);
        //$fi = Requerimiento::select('IDFormaIngreso')->where('IDRequerimiento', $requerimiento);
        //$cl = Requerimiento::select('IDClasificacion')->where('IDRequerimiento', $requerimiento);
        //$paises = Paise::select('NMPais')->where('IDPais',$p);
        //$formaingresos = Formaingreso::All();
        //$clasificaciones = Clasificacione::All();
        //$departamentos = Departamento::All();
        //$involucrados = Departamento::All();
        //'paises','formaingresos','clasificaciones','departamentos','involucrados','requerimientos'
        return view('responder.index', compact('n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
