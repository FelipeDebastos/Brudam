<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HistoricoPedidoController extends Controller
{
    public function relatorio()
    {
        $pedidos = DB::table('pedido')
            ->join('cliente', 'cliente.id', '=', 'pedido.id_cliente')
            ->select('pedido.*', 'cliente.nome')
            ->get();

            return view('historico-pedido', ['pedidos' => $pedidos]);;
    }
}
