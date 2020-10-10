<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    function cliente() {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id', 'id');
    }

}
