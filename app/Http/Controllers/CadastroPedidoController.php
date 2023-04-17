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
        $data_entrega = $request->input('data_entrega');
        $valor_frete = str_replace(['.', ','], ['', '.'], $request->input('valor_frete'));

        $cliente = new Cliente;
        $cliente->nome = $nome;
        $cliente->email = $email;
        $cliente->telefone = $telefone;
        $cliente->save();
    
        $pedido = new Pedido;
        $pedido->valor_frete = $valor_frete;
        $pedido->data_entrega =  $data_entrega;
        $pedido->id_cliente = $cliente->id;
       
        $pedido->save();    

        if (strlen($telefone) < 11) {
            session()->flash('error', 'O telefone não deve ter menos 11 caracteres.');
            return redirect()->back();
        }

        return $pedido->save() 
        ? redirect()->back()->with('success', 'Pedido cadastrado com sucesso.')
        : redirect()->back()->with('error', 'Erro ao cadastrar o pedido.');
    }
}

