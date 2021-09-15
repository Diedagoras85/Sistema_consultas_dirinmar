<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\EnviarAlerta;
use App\Models\Deptorequerimiento;
use Illuminate\Http\Request;
use App\Models\Requerimiento;
use App\Models\User;
use App\Models\Usuariodepto;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class AlertaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$alertas = Requerimiento::all();
        return view('admin.alertas.index');
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
        $requerimientos = Requerimiento::all();
        $usuariodeptos = Usuariodepto::all();
        $deptorequerimientos = Deptorequerimiento::all();
        $users = User::all();
        
        foreach ($requerimientos as $requerimiento){
            $mail = new EnviarAlerta($requerimiento);
            $correo = [];
            if (($requerimiento->NRDiaatraso < 6) and ($requerimiento->LGRespondido == 0)){
                foreach ($deptorequerimientos as $deptorequerimiento){
                    if ($deptorequerimiento->IDRequerimiento == $requerimiento->id){
                        foreach ($usuariodeptos as $usuariodepto) {
                            if ($usuariodepto->IDDepto == $deptorequerimiento->IDDepto){
                                foreach ($users as $user) {
                                    if ($user->id == $usuariodepto->IDUsuario){
                                        $correo = Arr::add($correo, 'correo' ,$user->email);
                                    }
                                }
                            }
                        }
                    }
                }
            }
            Mail::to($correo)->send($mail);
        }
        return redirect()->route('admin.alertas.index')->with('info','éxito!');
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
    public function edit(Requerimiento $requerimiento)
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

    /*public function send(Request $request){

        
    }*/
}
