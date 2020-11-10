<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller {

    public function index() {
        echo "<h3>Lista de categorias em departamentos</h3>";
        echo "<ul>";
            echo "<li>Alimentos</li>";
            echo "<li>Eletrônicos</li>";
            echo "<li>Móveis</li>";
            echo "<li>Informática</li>";
        echo "</ul>";

        if(Auth::check()) {
            $user = Auth::user();

            echo "<h4>Seja bem vindo " . $user->name;
            
            echo "<h3>Usuario:</h3>";
            
            echo "<p>" . $user->name . "</p>";
            echo "<p>" . $user->email . "</p>";
            echo "<p>" . $user->id . "</p>";
        }
        else {
            echo "<h4>Usuário não encontrado!</h4>";
            echo "<h4>Faça primeiramente o seu login!</h4>";
        }
    }
}
