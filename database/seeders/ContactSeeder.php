<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;                        //metodo de insert 1

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory()->count(100)->create();

        //metodo de insert 1
        // recomendado
        //depende do fillable no model e da chamada DatabaseSeeder

        /*
        for ($i=1; $i < 4; $i++) {
            switch ($i) {
                case 1:
                    $value = 'Seja bem vindo!';
                    break;
                case 2:
                    $value = 'Estamos satisfeitos em recebe-lo';
                    break;
                case 3:
                    $value = 'Avalie nosso atendimento';
                    break;
                default:
                    $value = 'Bem vindo!';
                    break;
            }
            $contact = new Contact();
            $contact->name = 'Fulano'.$i;
            $contact->email = 'fulano'.$i.'@contato.com.br';
            $contact->telephone = '(81) 99999-888'.$i;
            $contact->reason_contact = $i;
            $contact->message = $value;
            $contact->save();
        }
        */
    }
}
