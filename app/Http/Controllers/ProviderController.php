<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProviderController extends Controller
{


    /**
     * return view
     */
    public function index()
    {
        $title = 'Fornecedor';
        return view('app.provider.index', compact('title'));

        //find(); retorna um ou uma coleção de registros
        //all(); retorna todos os registros
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Fornecedor cadastrar';
        return view('app.provider.register', compact('title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Fornecedor Listar';
        return view('app.provider.list', compact('title'));
    }
}
