<?php

namespace App\Services;

use App\Models\Cliente;

class ClienteService
{

    //Cria um cliente com endereço
    public function criarCliente(array $data): Cliente
    {
        $cliente = Cliente::create($data);
        $cliente->endereco()->create($data['endereco']);

        return $cliente->load('endereco');
    }
}
