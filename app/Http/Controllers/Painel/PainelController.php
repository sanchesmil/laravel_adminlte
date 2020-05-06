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

        $title = "Painel de Controle";
        
        return view('painel.principal.index', compact('user', 'title'));
    }
   
}
