<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

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
    public function create(Request $request)
    {
        $title      = 'Fornecedor cadastrar';
        $message    = '';

        if ($request->input('_token') != '') {
            $rules = [
                'name'              => 'required|min:3|max:40',
                'email'             => 'email',
                'site'              => 'required',
                'federative_union'  => 'required|min:2|max:2'
            ];
            $feedback = [
                'name.required'             => 'O campo Nome precisa ser preenchido',
                'name.min'                  => 'O campo Nome deve ter no mínimo 3 carcteres',
                'name.max'                  => 'O campo Nome deve ter no máximo 40 caracteres',
                'email.email'               => 'O campo E-mail precisa ser preenchido corretamente',
                'site.required'             => 'O campo Site precisa ser preenchido',
                'federative_union.required' => 'O campo UF precisa ser preenchido',
                'federative_union.min'      => 'O campo UF deve ter no mínimo 2 carcteres',
                'federative_union.max'      => 'O campo UF deve ter no máximo 2 caracteres'
            ];

            //validar request - faz uma requisição para rota anterior se houver error
            $request->validate($rules,$feedback);

            $provider = new Provider;
            $provider->fill($request->all()); //$fillable deve está definido no model
            $provider->save();

            $message = 'Cadastro realizado com sucesso';
        }

        return view('app.provider.register', compact('title', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $title = 'Fornecedor Listar';

        $providers = Provider::where('name', 'like', '%'.$request->input('name').'%')
                            ->orWhere('name', 'like', '%'.$request->input('name').'%')
                            ->orWhere('name', 'like', '%'.$request->input('name').'%')
                            ->orWhere('name', 'like', '%'.$request->input('name').'%')
                            ->get();

        return view('app.provider.list', compact('title', 'providers'));
    }
}
