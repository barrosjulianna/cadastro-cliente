<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome'           => 'required|string|max:150',
            'email'          => 'required|email|unique:clientes',
            'cnpj'           => 'required|string|max:18|unique:clientes',
            'observacao'     => 'nullable|string',
            'valor_contrato' => 'required|numeric|min:0',

            // Endereço
            'endereco.logradouro'   => 'required|string|max:150',
            'endereco.numero'       => 'required|string|max:20',
            'endereco.cep'          => 'required|string|max:20',
            'endereco.complemento'  => 'nullable|string|max:100',
            'endereco.bairro'       => 'required|string|max:100',
            'endereco.cidade'       => 'required|string|max:100',
        ];
    }
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'Informe um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',
            'cnpj.required' => 'O campo CNPJ é obrigatório.',
            'cnpj.unique' => 'Este CNPJ já está cadastrado.',
            'valor_contrato.required' => 'O campo Valor do Contrato é obrigatório.',
            'valor_contrato.numeric' => 'O Valor do Contrato deve ser numérico.',

            'endereco.logradouro.required' => 'O campo Logradouro é obrigatório.',
            'endereco.numero.required' => 'O campo Número é obrigatório.',
            'endereco.cep.required' => 'O campo CEP é obrigatório.',
            'endereco.bairro.required' => 'O campo Bairro é obrigatório.',
            'endereco.cidade.required' => 'O campo Cidade é obrigatório.',
        ];
    }
}
