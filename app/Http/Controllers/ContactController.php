<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\SelectOption;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'Contato';
        $reason_contacts = SelectOption::where('name', '=', 'reason_contact')
                                        ->get();
        //dd($_POST);
        return view('site.contact', compact('title','reason_contacts'));
    }

    public function store(Request $request)
    {
        //validar request - faz uma requisição para rota anterior
        $request->validate([
            'name'              => 'required',
            'telephone'         => 'required',
            'email'             => 'required',
            'reason_contact'    => 'required',
            'message'           => 'required|max:2000'
        ]);
        /*
        //captura de requisição da página
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('name');
        echo '<br/>';
        echo $request->input('email');
        */

        /*
        //gravar os requests no banco - method 1
        $contatc                    = new Contact();
        $contatc->name              = $request->input('name');
        $contatc->telephone         = $request->input('telephone');
        $contatc->email             = $request->input('email');
        $contatc->reason_contact    = $request->input('reason_contact');
        $contatc->message           = $request->input('message');
        $contatc->save();
        */
        //gravar os requests no banco - method 2
        $contatc = new Contact();
        $contatc->fill($request->all()); //$fillable deve está definido no model
        $contatc->save();
        /*
        //gravar os requests no banco - method 3
        $contatc = new Contact();
        $contatc->create($request->all()); //$fillable deve está definido no model
        */
    }
}
