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

        $title = "Lista de Usuários";

        //Caminho da URL atual
        //$uri = $this->request->route()->uri();  // Recupera a URI
        //$exploder = explode('/', $uri);  // Recupera as partes da URI, separadas por /
        //$urlAtual = $exploder[1]; // Recupera o caminho atual para preencher o BreadCrumb

        $usuarios = $this->model->where('id','!=',0)->get();

        return view('painel.usuarios.index', compact('user','title','usuarios'));
    }

   
    public function create()
    {
        $user = Auth()->User();

        $title = "Cadastro de Usuários";

        //$usuarios = $this->model->where('id','!=',0)->get();
        
        // Simula uma lista de funções em JSON
        $roles_json = 
        '[ 
            {"id":1, "name":"administrador"},
            {"id":2, "name":"gerente"},
            {"id":3, "name":"publicador"}
        ]';

        $roles = json_decode($roles_json); // Converte JSON -> Objeto 

        //dd($roles);
       
        return view('painel.usuarios.create', compact('user', 'title', 'roles'));
    }

    
    public function store(Request $request)
    {
        //dd($request->all());

        $store = User::create($request->all());

        $store = null;
        
        if($store)
            return redirect()->route('painel.usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');

        return redirect()->back()->with('error','Erro ao cadastrar o usuário!');
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
