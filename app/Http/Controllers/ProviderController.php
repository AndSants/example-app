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
        $title = 'Provider';
        return view('app.provider.index', compact('title'));

        //find(); retorna um ou uma coleção de registros
        //all(); retorna todos os registros
    }
}
