<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use App\Models\Categoria;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', function () {
    $categorias = Categoria::all();
    if (count($categorias) == 0)
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    else {
        foreach($categorias as $categ) {
            echo "<p>" . $categ->id . " - " . $categ->nome . "</p>";
        }
    }
});

Route::get('/produto', function () {
    $produtos = Produto::all();
    if (count($produtos) == 0)
        echo "<h4>Você não possui nenhum produto cadastrado</h4>";
    else {
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque<td>Preco</td><td>Categoria</td><tr></thead>";
        foreach($produtos as $prod) {
            echo "<tr>";
             echo "<td>" . $prod->nome . "</td>";
             echo "<td>" . $prod->estoque . "</td>";
             echo "<td>" . $prod->preco . "</td>";
             echo "<td>" . $prod->categoria->nome . "</td>";

            echo "</tr>";
        }
    }
});


Route::get('/categoriasprodutos', function () {
    $categorias = Categoria::all();
    if (count($categorias) === 0) {
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    }
    else {
        foreach($categorias as $categ) {
            echo "<p>" . $categ->id . " - " . $categ->nome . "</p>";
            $produtos= $categ->produtos;

            if (count($produtos) > 0) {  
                echo "<ul>";
                 foreach($produtos as $prod) {
                    echo "<li>" . $prod->nome . "</li>";
                 }
                echo "</ul>";
            }
        }
    }
});


Route::get('/categoriasprodutos/json', function () {
    $categorias = Categoria::with('produtos')->get();

    return $categorias->toJson();
});

Route::get('/adicionarproduto', function () {
    $categoria = Categoria::find(1);
    
    $produto = new Produto;
    $produto->nome = "Meu novo produto";
    $produto->estoque = 10;
    $produto->preco = 100;
    $produto->categoria()->associate($categoria);

    $produto->save();

    return $produto->toJson();
});

route::get('/removerprodutocategoria', function () {
    $produto = Produto::find(10);
    if(isset($produto)) {
        $produto->categoria()->dissociate();
        $produto->save();

        return $produto->toJson();
    }

    return '';
});

Route::get('/adicionarproduto/{catid}', function ($catid) {

    $categoria = Categoria::with('produtos')->find($catid);
    
    $produto = new Produto();
    $produto->nome = "Celular";
    $produto->estoque = 200;
    $produto->preco = 900;

    if (isset($categoria)) {
        $categoria->produtos()->save($produto);
    }
    $categoria->load('produtos');

    return $categoria->toJson();

});