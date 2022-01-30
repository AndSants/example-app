<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', 'LoginController@login')->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/cliente', 'ClienteController@index')->name('app.cliente');
    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedore');
    Route::get('/produto', 'ProdutoController@index')->name('app.produto');
});

Route::fallback(function(){
    echo 'A rota acessada não exite. <a href="'.route('site.index').'">clique aqui</a> para retornar a página inicial.';
});

Route::get('teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//passando parâmetros na rota
// Route::get(
//     'rota_param/{nome}/{categoria}/{assunto}/{mensagem?}',
//     function(string $nome, string $categoria, string $assunto, string $mensagem = 'Mensagem não informada'){
//         echo "Olá $nome, essa categoria é $categoria. Assunto: $assunto, Mensagem: $mensagem";
//     }
// );

//parâmetros regulares
// Route::get(
//     'rota_regular/{nome}/{categoria_id}',
//     function(string $nome, int $categoria_id){
//         echo "Olá $nome, essa categoria é $categoria_id.";
//     }
// )->where('nome','[A-Za-z]+')
// ->where('categoria_id', '[0-9]+');

//redirects
// Route::get('/rota2', function(){
//     return redirect()->route('site.contato');
// })->name('site.rota2');

