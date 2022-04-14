<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $data = ['date'];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function produtosDoOrcamento()
    {
        return $this->belongsToMany(Produto::class, 'orcamento_produtos');
    }
}
