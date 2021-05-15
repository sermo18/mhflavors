<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sabor;
use App\Models\Mezcla;
use App\Models\Usuario;
use App\Http\Requests\PostRequest;

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

    public function index()
    {
        $posts = Post::orderBy("titulo")
        ->paginate(6);
        $sabores = Sabor::orderBy("nombre")
        ->paginate(21);
        $mezclas = Mezcla::get();
        $marcas = [];
        for ($i=0; $i < count($sabores); $i++) { 
            if ($sabores[$i] && !in_array($sabores[$i]->marca, $marcas)) {
                array_push($marcas, $sabores[$i]->marca);
            }
        }
        return view('posts.index', compact('posts','mezclas','sabores','marcas'));
    }

    public function filtrarMarca($marca){

        $posts = Post::orderBy("titulo")
        ->paginate(6);
        $sabores = Sabor::orderBy("id")->where('marca', $marca)->paginate(6);
        $allSabores = Sabor::orderBy("id")
        ->paginate(6);
        $mezclas = Mezcla::get();
        $marcas = [];
        for ($i=0; $i < count($allSabores); $i++) { 
            if ($allSabores[$i] && !in_array($allSabores[$i]->marca, $marcas)) {
                array_push($marcas, $allSabores[$i]->marca);
            }
        }
        
        return view('posts.index', compact('posts','mezclas','sabores','marcas'));
    }
    public function locales()
    {
        $posts = Post::orderBy("titulo")
        ->paginate(6);
        $sabores = Sabor::orderBy("id")
        ->paginate(6);
        $mezclas = Mezcla::get();
        return view('posts.mapa', compact('posts','mezclas','sabores'));
    }

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
    public function store(Request $request)
    {
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->usuario()->associate(Usuario::findOrFail($request->get('usuario')));
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $sabor= Sabor::find($id);
        return view('posts.show',compact('post','sabor'));
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
    public function destroy($id)
    {

        $sabor = Sabor::findOrFail($id);
        $sabor->delete();
        return redirect()->route('posts.index');

      

    }
}
