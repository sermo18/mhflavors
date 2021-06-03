<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuario;
use App\Http\Requests\PostRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class LoginController extends Controller
{
    public function loginForm()
        {
        return view('auth.login');
        }
    public function login(LoginRequest $request)
    {
        $credenciales = $request->only('login', 'password');
            if (Auth::attempt($credenciales))
            {
                // Autenticación exitosa
            return redirect()->intended(route('posts.index'));
            } else {
            $error = 'Usuario incorrecto';
            return view('auth.login', compact('error'));
            }
    }
    public function logout()
    {
    Auth::logout();
    return view('auth.login');

    }
    public function registro()
    {
        $usuarios = Usuario::get();
        return view('auth.registro', compact('usuarios'));
    }

    public function registrarUsuario(RegisterRequest $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->get('nombre');
        $usuario->nacimiento = $request->get('nacimiento');
        $usuario->login = $request->get('login');
        $usuario->password = bcrypt($request->get('password'));
        $usuario->rol = $request->get('rol');
        $usuario->save();
        return view('auth.login');
    }

}
