<?php

namespace App\Http\Controllers;
use App\Empleado;
use DB; //Query Builder. 
use Illuminate\Http\Request;

class empleadosController extends Controller
{
    public function iniciarSesion()
    {
    	return view('iniciarsesion');
    }

    //Autenticar empleado en el sistema.
    public function entrarSistema(Request $datos)
    {
    	Redirect('/');
    }
}
