<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public const TABLE = 'clientes';
    protected $table = self::TABLE;
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'email',
        'cnpj',
        'observacoes',
        'valor_contrato',
    ];
    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
}
