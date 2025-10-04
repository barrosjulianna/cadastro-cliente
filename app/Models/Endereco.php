<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public const TABLE = 'enderecos';

    protected $table = self::TABLE;

    protected $fillable = [
        'cliente_id',
        'logradouro',
        'numero',
        'cep',
        'complemento',
        'bairro',
        'cidade',
    ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
