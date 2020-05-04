<?php

namespace App\Http\Controllers\Painel\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuariosController extends Controller
{

    public $request;  //define um request público
    public $model; // Define uma variável global que receberá a Model a ser manipulada

    public function __construct(Request $request, User $model)
    {
        $this->middleware('auth');

        $this->request = $request;
        $this->model = $model;
    }
   
    public function index()
    {

        $user = Auth()->User();

        //Controle de URL
        $uri = $this->request->route()->uri();  // Recupera a URI
        $exploder = explode('/', $uri);  // Recupera as partes da URI, separadas por /
        $urlAtual = $exploder[1]; // Recupera o caminho atual para preencher o BradCrumb

        $usuarios = $this->model->where('id','!=',0)->get();

        return view('painel.usuarios.index', compact('user', 'urlAtual', 'usuarios'));
    }

   
    public function create()
    {
        $title = "Painel Cadastro de Usuários";

         //Controle de URL
         $uri = $this->request->route()->uri();  // Recupera a URI
         $exploder = explode('/', $uri);  // Recupera as partes da URI, separadas por /
         $urlAtual = $exploder[1]; // Recupera o caminho atual para preencher o BradCrumb

         $usuarios = $this->model->where('id','!=',0)->get();

        $user = Auth()->User();
        return view('painel.usuarios.create', compact('user', 'urlAtual','title','usuarios'));
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
