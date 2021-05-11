<?php

namespace App\Http\Controllers;


use App\Models\Sabor;
use App\Models\Mezcla;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class MezclaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mezclas = Mezcla::orderBy('valoracion', 'DESC')->paginate(20);
        $sabores= Sabor::get();
        $usuarios = Usuario::get();
        if( Auth::id()){
            $userid = Auth::id();
        }else{
            $userid = 0;
        }

        return view('mezclas.index', compact('mezclas','sabores','usuarios','userid'));
    }

    public function misMezclas()
    {
        $mezclas = Mezcla::orderBy("id")->paginate(20);
        $sabores= Sabor::get();
        $usuarios = Usuario::get();
        $contador =  1 ;
        return view('mezclas.mismezclas', compact('mezclas','sabores','usuarios','contador'));
    }



    public function mezclaAleatoria($numeroAleatorio)
    {
        $mezclas = Mezcla::get();
        $sabores= Sabor::get();
        $usuarios = Usuario::get();
        return view('mezclas.aleatoria', compact('mezclas','sabores','usuarios','numeroAleatorio'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::get();
        $sabores = Sabor::get();
        $userid = Auth::id();
        return view('mezclas.create', compact('usuarios','sabores','userid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mezcla = new Mezcla();
        $mezcla->sabor1 = $request->get('sabor1');
        $mezcla->sabor2 = $request->get('sabor2');
        $mezcla->sabor3 = $request->get('sabor3');
        $mezcla->porcentaje1 = $request->get('porcentaje1');
        $mezcla->porcentaje2 = $request->get('porcentaje2');
        $mezcla->porcentaje3 = $request->get('porcentaje3');
        $mezcla->valoracion = 0;
        $mezcla->votos = 0;
        $mezcla->usuario()->associate(Usuario::findOrFail($request->get('usuario')));
        $mezcla->save();
        return redirect()->route('mezclas.mismezclas');
    }

    public function añadirMezcla(Mezcla $mezclaA)
    {
        $mezcla = new Mezcla();
        $mezcla->sabor1 = $mezclaA->sabor1;
        $mezcla->sabor2 =  $mezclaA->sabor2;
        $mezcla->sabor3 =  $mezclaA->sabor3;
        $mezcla->porcentaje1 = $mezclaA->porcentaje1;
        $mezcla->porcentaje2 = $mezclaA->porcentaje2;
        $mezcla->porcentaje3 = $mezclaA->porcentaje3;
        $mezcla->valoracion = $mezclaA->valoracion;
        $mezcla->usuario_id = Auth::id();
        $mezcla->save();
        return redirect()->route('mezclas.mismezclas');
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


    public function valorar($id)
    {
        $mezcla = Mezcla::findOrFail($id);
        $usuarios = Usuario::get();
        $sabores = Sabor::get();
        $userid = Auth::id();
        return view('mezclas.valorar', compact('mezcla','usuarios','sabores','userid'));
    }

    public function valorarMezcla(Request $request, $id){

        $mezcla = Mezcla::findOrFail($id);
        $mezcla->votos += 1;
        $mezcla->valoracion = ($mezcla->valoracion + $request->get('valoracion'))/ $mezcla->votos ;
        $mezcla->save();
        return redirect()->route('mezclas.index');
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

    }

    public function hacerPremium($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->rol = 'premium';
        $usuario->save();
        return redirect()->route('mezclas.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mezcla = Mezcla::findOrFail($id);
        $mezcla->delete();
        return redirect()->route('mezclas.mismezclas');
    }
}
