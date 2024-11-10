<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all(); // SELECT FROM * User
        return view('admin.usuarios.index',compact('usuarios'));
    }
}
