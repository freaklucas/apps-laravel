<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    function categoria() {
        return $this->belongsTo('App\Models\Categoria'); // um produto pertence a uma categoria // relação um pra um 
    }
    
}
