<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\LogAccessMiddleware;

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

// Route::middleware(LogAccessMiddleware::class)
//         ->get('/', 'PrincipalController@principal')
//         ->name('site.index');
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/about_us', 'AboutUsController@about_us')->name('site.aboutus');
Route::get('/contact', 'ContactController@index')->name('site.contact');
Route::post('/contact', 'ContactController@store')->name('site.contact');

Route::get('/login/{erro?}', 'AuthenticationController@login')->name('site.login');
Route::post('/login', 'AuthenticationController@authenticate')->name('site.login');

Route::middleware('authenticate:padrao')->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/logout', 'AuthenticationController@logout')->name('app.logout');
    Route::get('/client', 'ClientController@index')->name('app.client');
    // Route::controller(ProviderController::class)->group(function(){
        Route::get('/provider', 'ProviderController@index')->name('app.provider');
        Route::post('/provider/list', 'ProviderController@show')->name('app.provider.list');
        Route::get('/provider/list', 'ProviderController@show')->name('app.provider.list');
        Route::get('/provider/register', 'ProviderController@create')->name('app.provider.register');
        Route::post('/provider/register', 'ProviderController@create')->name('app.provider.register');
        Route::get('/provider/edit/{id}/{message?}', 'ProviderController@edit')->name('app.provider.edit');
    // });
    Route::get('/product', 'ProductController@index')->name('app.product');
});

Route::fallback(function(){
    echo 'A rota acessada não exite. <a href="'.route('site.index').'">clique aqui</a> para retornar a página inicial.';
});

Route::get('test/{p1}/{p2}', 'TestController@test')->name('test');

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

