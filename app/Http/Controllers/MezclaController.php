<?php

namespace App\Http\Controllers;


use App\Models\Sabor;
use App\Models\Mezcla;
use App\Models\Usuario;
use App\Models\MezclaFavorita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MezclaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // This function show all mixings ordered by valoration
    public function index()
    {
        // We take all mixings, flavors, users and favourite mixings and we pass this variables to the view index
        $mezclas = Mezcla::orderBy('valoracion', 'DESC')->paginate(20);
        $sabores= Sabor::get();
        $usuarios = Usuario::get();
        $mezclasFavoritas = MezclaFavorita::get();
        if( Auth::id()){
            $userid = Auth::id();
        }else{
            $userid = 0;
        }

        return view('mezclas.index', compact('mezclas','sabores','usuarios','userid','mezclasFavoritas'));
    }
    // This function show the favourite mixings of the user
    public function misMezclas()
    {
        $mezclas = Mezcla::orderBy("id")->paginate(20);
        $sabores= Sabor::get();
        $usuarios = Usuario::get();
        $mezclasFavoritas = MezclaFavorita::get();
        $contador =  1 ;
        return view('mezclas.mismezclas', compact('mezclas','sabores','usuarios','contador','mezclasFavoritas'));
    }


    // This function return the view aleatoria with a random number to show a random mixing
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
    // This function return the view create
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

     // This function add a new mixing created by the user, if the percentage of mixing it's bigger than 100% will send error
    public function store(Request $request)
    {
        //If the request has more than 100% or less we send an error to the view mismezclas
        if ($request->get('porcentaje1') + $request->get('porcentaje2') + $request->get('porcentaje3') > 100) {
            return  redirect()->route('mezclas.mismezclas')->withErrors(['El porcentaje de sabores no puede ser superior a 100%']);
        }else if($request->get('porcentaje1') + $request->get('porcentaje2') + $request->get('porcentaje3') < 100){
            return  redirect()->route('mezclas.mismezclas')->withErrors(['El porcentaje de sabores no puede ser inferior a 100%']);
        }else{

        //Else we save the new mixing
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

        $mezclaFavorita = new MezclaFavorita();
        $mezclaFavorita->mezcla_id = $mezcla->id;
        $mezclaFavorita->usuario_id = Auth::id();
        $mezclaFavorita->save();

        return redirect()->route('mezclas.mismezclas');
        }
    }

    //This function add a new mixing to the mixings of the users.
    public function añadirMezcla(Mezcla $mezclaA)
    {
        //Show the view to create a new mixing
        $mezclaFavorita = new MezclaFavorita();
        $mezclaFavorita->mezclas_id = $mezclaA->id;
        $mezclaFavorita->usuario_id = Auth::id();
        $mezclaFavorita->save();
        return redirect()->route('mezclas.mismezclas');
    }

    public function quitarMezcla($id){
        //Delete the favourite mixing
        $mezclaFavorita = MezclaFavorita::findOrFail($id);
        $mezclaFavorita->delete();
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

    // This function return the view valorar with the mixing that we would valorate
    public function valorar($id)
    {
        $mezcla = Mezcla::findOrFail($id);
        $usuarios = Usuario::get();
        $sabores = Sabor::get();
        $userid = Auth::id();
        return view('mezclas.valorar', compact('mezcla','usuarios','sabores','userid'));
    }

    // This function add to the mixing valoration the request valoration and divides it between the number of votes
    public function valorarMezcla(Request $request, $id){
        $mezcla = Mezcla::findOrFail($id);
        $mezcla->votos += 1;
        $mezcla->valoracion = ($mezcla->valoracion + $request->get('valoracion'));
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

    //This function its to do a user premium
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

     //This function it's for destroy a mixing of your favourite mixings
    public function destroy($id)
    {
        $mezcla = Mezcla::findOrFail($id);
        $mezcla->delete();
        return redirect()->route('mezclas.mismezclas');
    }
}
