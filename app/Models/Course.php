<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // definindo o nome da tabela no Banco de Dados
    protected $table = 'courses';

    // indicar quais colunas serão manipuladas no banco de dados
    protected $fillable = ['name'];




}
