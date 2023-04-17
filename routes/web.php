<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroPedidoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('cadastro-pedido');
});

Route::get('/historico-pedido', function () {
    return view('historico-pedido');
})->name('historico-pedido');



Route::post('/processar_pedido', [CadastroPedidoController::class, 'store'])->name('processar_pedido');