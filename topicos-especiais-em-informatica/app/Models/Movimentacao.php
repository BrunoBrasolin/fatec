<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nome', 'valor', 'tipo', 'data_criacao', 'data_atualizacao'];

}
