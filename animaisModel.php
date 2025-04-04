<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animaisModel extends Model
{
    use HasFactory;

    protected $table = "petshop";
    protected $fillable = ['id','Tipo_animal','Tipo_atendimento','Preco', 'Data_atendimento','Tutor'];

}

