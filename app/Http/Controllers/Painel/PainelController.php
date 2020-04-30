<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public $request;  //define um request público
    public $user; // Variável que representa o model User

    public function __construct(Request $request, User $user)
    {
        $this->middleware('auth');

        $this->request = $request;
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->User();
        return view('painel.index', compact('user'));
    }

    public function viewUsuarios(){

        $user = Auth()->User();

        //Controle de URL
        $uri = $this->request->route()->uri();  // Recupera a URI
        $exploder = explode('/', $uri);  // Recupera as partes da URI, separadas por /
        $urlAtual = $exploder[1]; // Recupera o caminho atual para preencher o BradCrumb

        $usuarios = $this->user->all();
 
        return view('painel.usuarios.index', compact('user', 'urlAtual', 'usuarios'));
    }

   
}
