<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requerimiento;
use App\Models\Formaingreso;
use App\Models\Clasificacione;
use App\Models\Clientesrequerimiento;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Deptorequerimiento;
use PDF;


class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos = Requerimiento::all();
        $clientes = Cliente::all();
        $formaingresos = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $departamentos = Departamento::all();
        $deptorequerimientos = Deptorequerimiento::all();
        $clienterequerimientos = Clientesrequerimiento::all();
        
        return view('reportes.index', compact('requerimientos','clientes','formaingresos','clasificaciones','departamentos','deptorequerimientos','clienterequerimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $requerimientos = Requerimiento::all();
        $clientes = Cliente::all();
        $formaingresos = Formaingreso::all();
        $clasificaciones = Clasificacione::all();
        $departamentos = Departamento::all();
        $deptorequerimientos = Deptorequerimiento::all();
        $clienterequerimientos = Clientesrequerimiento::all();

        $pdf = PDF::loadView('reportes.create',compact('requerimientos','clientes','formaingresos','clasificaciones','departamentos','deptorequerimientos','clienterequerimientos'));
        
        return $pdf->download('reporte_consultas.pdf');
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
