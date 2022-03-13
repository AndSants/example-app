<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function index()
    {
        $title = 'Fornecedor';
        return view('app.provider.index', compact('title'));

        //find(); retorna um ou uma coleção de registros
        //all(); retorna todos os registros
    }

    public function create(Request $request)
    {
        $title      = 'Fornecedor cadastrar';
        $message    = '';

        if ($request->input('_token') != '' && $request->input('id') == '') {
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

        if ($request->input('_token') != '' && $request->input('id') != '') {
            $provider   = Provider::find($request->input('id'));
            $update     = $provider->update($request->all());
            $id         = $request->input('id');

            if ($update) {
                $message = 'Registro atualizado com sucesso!';
            }else{
                $message = 'Erro ao tentar atualizar registro!';
            }

            return redirect()->route('app.provider.edit', compact('id', 'message'));
        }

        return view('app.provider.register', compact('title', 'message'));
    }

    public function show(Request $request)
    {
        $title = 'Fornecedor Listar';
        $request_all = $request->all();
        $providers = Provider::where('name', 'like', '%'.$request->input('name').'%')
                            ->orWhere('name', 'like', '%'.$request->input('name').'%')
                            ->orWhere('name', 'like', '%'.$request->input('name').'%')
                            ->orWhere('name', 'like', '%'.$request->input('name').'%')
                            ->paginate(3);

        return view('app.provider.list', compact('title', 'providers', 'request_all'));
    }

    public function edit($id, $message = '')
    {
        $title      = 'Fornecedor - Atualizar';

        $provider = Provider::find($id);
        return view('app.provider.register', compact('title','message','provider'));
    }

}
