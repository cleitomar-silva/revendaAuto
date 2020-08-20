<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = Auth::user();
        $chamados = Chamado::all();
        return view('home', compact('chamados'));
    }

    public function detalhe($id)
    {
        $chamado = Chamado::find($id);
        return view('detalhe', compact('chamado'));
        //Não autorizado
        /*if(Gate::denies('ver-chamado', $chamado)){
            abort('403', 'Não autorizado');
        }*/
        //tem acesso
       /* if(Gate::allows('ver-chamado', $chamado)){
          return view('detalhe', compact('chamado'));
        }    */
        
        
        
    }
}
