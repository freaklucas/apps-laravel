<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = 'projetos';

    function desenvolvedores() {

        return $this->belongsToMany("App\Models\Desenvolvedor", "alocacoes")->withPivot("horas_semanais");
    }
}
