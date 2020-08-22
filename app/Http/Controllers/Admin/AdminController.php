<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $caminhos = [
            ['url' => '/admin', 'titulo' => 'Painel'],
            ['url' => '', 'titulo' => 'Usuários']
        ];

        return view('admin.index', compact('caminhos'));
    }
}
