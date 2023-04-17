<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pedido;

class CadastroPedidoController extends Controller
{
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $valor_pedido = str_replace(['.', ','], ['', '.'], $request->input('valor_pedido'));

        $cliente = new Cliente;
        $cliente->nome = $nome;
        $cliente->email = $email;
        $cliente->telefone = $telefone;
        $cliente->save();
    
        $pedido = new Pedido;
        $pedido->valor = $valor_pedido;
        $pedido->id_cliente = $cliente->id;
        $pedido->data = date('Y-m-d');
        $pedido->save();    

        return $pedido->save() 
        ? redirect()->back()->with('success', 'Pedido cadastrado com sucesso.')
        : redirect()->back()->with('error', 'Erro ao cadastrar o pedido.');
    }
}

