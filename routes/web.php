<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroPedidoController;
use App\Http\Controllers\HistoricoPedidoController;


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
});

Route::get('/relatorio-pedido', [HistoricoPedidoController::class, 'relatorio'])->name('relatorio-pedido.json');

Route::post('/processar_pedido', [CadastroPedidoController::class, 'store'])->name('processar_pedido');