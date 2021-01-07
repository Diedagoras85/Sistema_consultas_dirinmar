<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    //
    public function __invoke()
    {
        return view('menu.index');
    }

    /*public function ingresar(Request $request) {
        
        $ingreso = new menu();
        $ingreso->name = $request->name; 
        //return view('menu.index');
    }*/
    public function index(){
        return view('menu.index');
    }

    public function create(){
        return view('menu.formulario');
    }

    public function show(){
       
        return view('menu.mail');
    }   
}
