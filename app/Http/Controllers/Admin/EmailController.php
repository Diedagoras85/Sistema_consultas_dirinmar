<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Clientemail;
use App\Models\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::all();
        $emails = Email::all();
        $clientemails = Clientemail::all();
        return view('admin.emails.index', compact('clientes','emails','clientemails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $emails = Email::all();
        return view('admin.emails.create', compact('clientes','emails'));
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
            'NMEmail' => 'required'
        ]);

        $email = Email::create([
            'NMEmail' => $request->NMEmail
        ]);

        $email1 = Email::latest('id')->first();

        $emailcli = Clientemail::create([
            'IDCliente' => $request->cliente,
            'IDEmail' => $email1->id
        ]); 

        return redirect()->route('admin.emails.index')->with('info','El requerimiento se creo satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        return view('admin.requerimientos.show', compact('email'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        $clientemails = Clientemail::all();
        $clientes = Cliente::all();
        
        return view('admin.emails.edit', compact('clientes','email','clientemails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        $request->validate([
            'NMEmail' => 'required'
        ]);

        $email->update([
            'NMEmail' => $request->NMEmail
        ]);

        return redirect()->route('admin.emails.edit', $email);
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
