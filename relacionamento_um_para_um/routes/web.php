<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;

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


Route::get('/clientes', function () {
    $clientes = Cliente::all();
    foreach($clientes as $client) {
        echo "<p>ID: ". $client->id . "</p>";
        echo "<p>Nome: ". $client->nome . "</p>";
        echo "<p>Telefone: ". $client->telefone . "</p>";

        echo "<p>Rua: ". $client->endereco->rua . "</p>";
        echo "<p>Numero: ". $client->endereco->numero . "</p>";
        echo "<p>Bairro: ".$client->endereco->bairro . "</p>";
        echo "<p>Cidade: ". $client->endereco->cidade . "</p>";
        echo "<p>UF: ". $client->endereco->uf . "</p>";
        echo "<p>Cep: ".$client->endereco->cep . "</p>";

        echo "<hr>"; 
    }
 });

 Route::get('/enderecos', function () {
    $ends = Endereco::all();
    foreach($ends as $enderecos) {
        echo "<p>ID Cliente: ". $enderecos->cliente_id . "</p>";
        
        echo "<hr>";
        echo "<p>Nome: ". $enderecos->cliente->nome . "</p>";
        echo "<p>Telefone: ". $enderecos->cliente->telefone . "</p>";
        echo "<hr>";

        echo "<p>Rua: ". $enderecos->rua . "</p>";
        echo "<p>Numero: ". $enderecos->numero . "</p>";
        echo "<p>Bairro: ". $enderecos->bairro . "</p>";
        echo "<p>Cidade: ". $enderecos->cidade . "</p>";
        echo "<p>UF: ". $enderecos->uf . "</p>";
        echo "<p>Cep: ". $enderecos->cep . "</p>";
        echo "<hr>";
    }
 });

Route::get('/inserir', function() {
    $cliente = new Cliente();
    $cliente->nome = "João do Bairro";
    $cliente->telefone = "66 883420588";
    
    $cliente->save();

    $endereco = new Endereco();
    $endereco->rua = "Avenida Brasil";
    $endereco->numero = 12;
    $endereco->bairro="Centro";
    $endereco->cidade = "Goiânia";
    $endereco->uf = "GO";
    $endereco->cep = "12345678";

    $cliente->endereco()->save($endereco);


    $cliente = new Cliente();
    $cliente->nome = "Pedroca";
    $cliente->telefone = "64 883420588";
    
    $cliente->save();

    $endereco = new Endereco();
    $endereco->rua = "Avenida Brasilian";
    $endereco->numero = 122;
    $endereco->bairro="Centro";
    $endereco->cidade = "São Carlos";
    $endereco->uf = "SP";
    $endereco->cep = "98765432";

    $cliente->endereco()->save($endereco);

});

Route::get('/clientes/json', function() {
    //$clientes = Cliente::all(); Lazy Loading(Estratégia Padrão) ** Iinda não buscou o 'endereco' de todos os clientes.
    
    $clientes = Cliente::with(['endereco'])->get(); // Eager Loading
    
    return json_encode($clientes);
});

Route::get('/enderecos/json', function() {
    //$enderecos = Endereco::all();
    
    $enderecos = Endereco::with(['cliente'])->get(); // Eager Loading
    
    return json_encode($enderecos);
});



