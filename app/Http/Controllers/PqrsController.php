<?php

namespace App\Http\Controllers;
use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request){
        // El error desaparece al agregar el punto y coma al final
        $request->validate([
        
    'nombres' => 'required|string|max:100',
    'apellidos' => 'required|string|max:100',
    'correo' => 'required|email',
    'tipo' => 'required|in:Queja,Petición,Felicitación',
    'mensaje' => 'required|string',
    'acepto' => 'accepted'
]);

        

        Pqrs::create([
        'nombre'=>$request->nombres,
        'apellidos'=>$request->apellidos,
        'correo'=>$request->correo,
        'tipo'=>$request->tipo,
        'mensaje'=>$request->mensaje,
        'estado'=>$request->has('acepto')
        

        ]);
        return redirect()->route('nosotros')->with('success', 'Mensaje enviado correctamente');
    }
    public function index()
    {
    $mensajes = Pqrs::orderBy('id','desc')->get();
    return view('mensajes', compact('mensajes'));
    }
}