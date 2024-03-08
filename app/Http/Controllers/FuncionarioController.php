<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{

    public function showFuncionarios() {
        return view('funcionarios');
    }

    public function adicionarFuncionario() {
        return view('adicionarfuncionario');
    }

    public function acessarFuncionario() {
        return view('acessarfuncionario');
    }
}
