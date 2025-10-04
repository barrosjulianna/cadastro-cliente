<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
use App\Services\ClienteService;

class ClienteController extends Controller
{
    protected ClienteService $clienteService;

    public function __construct(ClienteService $clienteService)
    {
        $this->clienteService = $clienteService;
    }
    // Retorna Cliente + Endreço
    public function index()
    {
        $clientes = Cliente::with('endereco')->get();
        return response()->json($clientes);
    }
    // Retorna Cliente + Endreço por ID
    public function show($id)
    {
        $cliente = Cliente::with('endereco')->findOrFail($id);
        return response()->json($cliente);
    }
    // Cria Cliente + Endereço
    public function store(StoreClienteRequest $request)
    {
        $cliente = $this->clienteService->criarCliente($request->validated());

        return response()->json([
            'message' => 'Cliente criado com sucesso!',
            'data'    => $cliente->load('endereco'),
        ], 201);
    }
}
