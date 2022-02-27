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
        return view('app.provider.index');

        //find(); retorna um ou uma coleção de registros
        //all(); retorna todos os registros
    }
}
