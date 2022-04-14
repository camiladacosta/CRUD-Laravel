<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Realiza conexão com o banco pelo Eloquent
 */
class Cliente extends Model
{
    // protected $table = "cliente";
    use HasFactory;

<<<<<<< HEAD
    // public function endereco(){
    //     return $this->belongsTo('App\Model\Endereco');
    // }

    public function orcamentos()
    {
        return $this->hasMany('App\Models\Orcamentos');
    }
=======
    public function endereco(){
         return $this->belongsTo('App\Models\Endereco');
     }
>>>>>>> main
}
