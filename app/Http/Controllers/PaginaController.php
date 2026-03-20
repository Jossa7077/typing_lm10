<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contacto()
    {
        return view('contacto');
    }
    
}
