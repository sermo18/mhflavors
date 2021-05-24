<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sabor;
use App\Models\Mezcla;
use App\Models\Usuario;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


class PostController extends Controller
{

    public function __construct()
        {
           // $this->middleware('auth',
            //['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
           // $this->middleware(['auth', 'roles:admin']);
            

        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // This function take all flavors, mixings and brands and send the information to the view index of all flavors
    public function index()
    {
        $sabores = Sabor::orderBy("nombre")
        ->paginate(21);
        $mezclas = Mezcla::get();
        
        $allSabores = Sabor::get();
        $marcas = [];
        for ($i=0; $i < count($allSabores); $i++) { 
            if ($allSabores[$i] && !in_array($allSabores[$i]->marca, $marcas)) {
                array_push($marcas, $allSabores[$i]->marca);
            }
        }
        return view('posts.index', compact('mezclas','sabores','marcas'));
    }

    // This function take the flavors with the brand that we pass in the parametrer '$marca' and send it to the index
    public function filtrarMarca($marca){

        $posts = Post::orderBy("titulo")
        ->paginate(6);
        $sabores = Sabor::orderBy("id")->where('marca', $marca)->paginate(6);

        $allSabores = Sabor::get();
        $mezclas = Mezcla::get();
        $marcas = [];
        for ($i=0; $i < count($allSabores); $i++) { 
            if ($allSabores[$i] && !in_array($allSabores[$i]->marca, $marcas)) {
                array_push($marcas, $allSabores[$i]->marca);
            }
        }
        
        return view('posts.index', compact('mezclas','sabores','marcas'));
    }

    // This function it's to show the view of a map of lounges that you can go to smoke shisha
    public function locales()
    {
        $posts = Post::orderBy("titulo")
        ->paginate(6);
        $sabores = Sabor::orderBy("id")
        ->paginate(6);
        $mezclas = Mezcla::get();
        return view('posts.mapa', compact('posts','mezclas','sabores'));
    }

    // Take all flavors ordered by the valoration of these flavors
    public function topSabores()
    {
        $sabores =  Sabor::orderBy('valoracion', 'DESC')->get()->take(10);
        return view('posts.topsabores', compact('sabores'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Deprecated
    public function create()
    {
        $usuarios = Usuario::get();
        return view('posts.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Save new comment in the post
    public function store(Request $request, $id, $userid)
    {
        $post = new Post();
        $post->titulo = "P";
        $post->contenido = $request->get('contenido');
        $post->usuario()->associate(Usuario::findOrFail($request->get('usuario')));
        $post->sabor_id = $request->get('idsabor');
        $post->save();

        $sabor= Sabor::find($request->get('idsabor'));
        $posts = Post::get();
        $usuarios = Usuario::get();
        $userid = Auth::id();

        return view('posts.show',compact('sabor','saboresmarca','posts','userid'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // This function show one flavor selected and more flavors of the brand of that flavor
    public function show($id)
    {
        $sabor= Sabor::find($id);
        $posts = Post::get();
        $usuarios = Usuario::get();
        $userid = Auth::id();
        $saboresmarca = Sabor::orderBy("id")->where('marca', $sabor->marca)->paginate(4);
        return view('posts.show',compact('sabor','saboresmarca','posts','userid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sabor = Sabor::findOrFail($id);
        return view('posts.edit', compact('sabor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //This function adds the value of the petition to that of the flavor and divides it between the votes
    public function update(Request $request, $id)
    {
        
        $sabor = Sabor::findOrFail($id);
        $sabor->votos += 1;
        $sabor->valoracion = ($sabor->valoracion + $request->get('valoracion'))/$sabor->votos;
        $sabor->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Deprecated
    public function destroy($id)
    {

        $sabor = Sabor::findOrFail($id);
        $sabor->delete();
        return redirect()->route('posts.index');

      

    }
}
