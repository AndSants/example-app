<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FornecedorController extends Controller
{
    

    /**
     * return view
     */
    public function index()
    {
        return view('app.fornecedor.index');

        //find(); retorna um ou uma coleção de registros
        //all(); retorna todos os registros
    }
}
