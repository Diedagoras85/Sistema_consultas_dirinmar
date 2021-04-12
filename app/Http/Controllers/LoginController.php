<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function __invoke()
    {
        //$Usuario = Usuario::se
        return view('Login');
    }
    
    public function validar(Request $request){
        $Usuario = new Usuario();
        $RunUsuario = Usuario::Select('NRRun','GLContrasena')->where('NRRun',$request->run)->first();
        
        if (($RunUsuario->NRRun) and ($RunUsuario->GLContrasena)) {
            return redirect()->route('menu.index');
        }
        else
        {
            return redirect()->route('login');
          
        }

    }
    
} 
