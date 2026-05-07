<?php

namespace App\Http\Controllers;
use App\Models\Pqrs; //invocamos 
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PqrsController extends Controller
{
    //recibe datos del html  y muestra datos en la pagina, laravel recibe la peticion http  
     public function store (Request $request){
      
       $request ->validate([

            'nombres'=> 'required|string|max:100',
                'apellidos'=> 'required|string|max:100',
                'correo' => 'required|email',
                'tipo' => 'required|in:Queja,Peticion,Felicitacion',
                'acepto'=> 'accepted'

       ]);
       Pqrs::create([
                 'nombre'=> $request ->nombres, 
                'apellidos'=> $request ->apellidos,
                      'correo'=> $request ->correo,
                      'tipo'=> $request ->tipo,
                      'mensaje'=> $request ->mensaje,
                      'estado'=> $request ->has ('acepto')
                     

       ]);
       return redirect()->route('nosotros')->with('success', 'Mensaje guardado correctamente ✅');
     }
     public function index()
{
 
     $pqrs = Pqrs::latest()->get();
  
    return view('mensajes', compact('pqrs'));
}
////// Editar
    public function edit($id)
{
    $mensaje = Pqrs::findOrFail($id);
    return view('editar_mensaje', compact('mensaje'));
}


/////// Actualizar  
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correo' => 'required|email',
            'telefono' => 'required|numeric|digits_between:7,10',
            'tipo' => 'required|in:Queja,Peticion,Felicitacion',
            'prioridad' => 'required|in:Alta,Media,Baja',
            'mensaje' => 'required|string|min:10'
        ]);

        $mensaje = Pqrs::findOrFail($id);

        $mensaje->update([
    'nombre' => $request->nombres,
    'apellidos' => $request->apellidos,
    'correo' => $request->correo,
    'telefono' => $request->telefono,
    'tipo' => $request->tipo,
    'prioridad' => $request->prioridad,
    'mensaje' => $request->mensaje
]);

return redirect()->route('mensajes')
    ->with('success', 'Actualizado correctamente');
    }

}