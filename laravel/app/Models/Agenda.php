<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;//fatoração - dividir
    protected $table = 'registro'; //nome da tabela
}//Coloco apenas a tabela do banco de dados
