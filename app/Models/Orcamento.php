<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $data = ['date'];

    public function user()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
}
