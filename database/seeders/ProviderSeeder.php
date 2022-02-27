<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provider;                        //metodo de insert 1

//use Illuminate\Support\Facades\DB;              //metodo de insert 2
//use Illuminate\Support\Str;                     //metodo de insert 2

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Provider::factory()->count(100)->create();

        //metodo de insert 1
        // recomendado
        //depende do fillable no model e da chamada DatabaseSeeder
        /*
        for ($i=1; $i < 4; $i++) {
            switch ($i) {
                case 1:
                    $value = 'PE';
                    break;
                case 2:
                    $value = 'AL';
                    break;
                case 3:
                    $value = 'CE';
                    break;
                default:
                    $value = 'PE';
                    break;
            }
            $provider = new Provider();
            $provider->name = 'Fornecedor '.$i.'00';
            $provider->email = 'contato@fornecedor'.$i.'00.com.br';
            $provider->site = 'fornecedor'.$i.'00.com.br';
            $provider->fu = $value;
            $provider->save();
        }
        */

        // for ($i=0; $i < 3; $i++) {
        //     //metodo de insert 2
        //     DB::table('providers')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@fronecedor.com.br',
        //         'site' => Str::random(10).'fronecedor.com.br',
        //         'fu' => Str::random(2)
        //     ]);
        // }
    }
}
