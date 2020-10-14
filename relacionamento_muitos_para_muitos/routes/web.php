<?php

use Illuminate\Support\Facades\Route;
use App\Models\Projeto;
use App\Models\Desenvolvedor;
use App\Models\Alocacao;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desenvolvedor_projetos', function () {
    $desenvolvedores = Desenvolvedor::with('projetos')->get();

    foreach($desenvolvedores as $devs) {
        echo "<p> Nome do desenvolvedor: " . $devs->nome . "</p>";
        echo "<p> Cargo do desenvolvedor: " . $devs->cargo . "</p>";

        if (count($devs->projetos) > 0 ) {
            echo "Projetos: <br>";
             echo "<ul>";
                foreach($devs->projetos as $project) {
                     echo "<li>";
                        echo "Nome: " . $project->nome . "  |   ";
                        echo "Horas do projeto: " . $project->estimativa_horas . "  |   ";
                        echo "Horas trabalhadas semanais: " . $project->pivot->horas_semanais;

                     echo "</li>";
                }
             echo "</ul>";
        }
        echo "<hr>";
    }
    //return $desenvolvedores->toJson();
});

Route::get('/projeto_desenvolvedores', function () {
    $projetos = Projeto::with('desenvolvedores')->get();
    
    foreach($projetos as $project) {
            echo "<p> Nome do projeto: " . $project->nome . "</p>";
            echo "<p> Estimativa do projeto[em horas]: " . $project->estimativa_horas . "</p>";
            
            if (count($project->desenvolvedores) > 0) {

                echo "Desenvolvedores: <br>";
                echo "<ul>";
                    foreach($project->desenvolvedores as $devs) {
                        echo "<li>";
                            echo "Nome do desenvolvedor " . $devs->nome . " | ";
                            echo "Horas trabalhadas " . $devs->pivot->horas_semanais . " | ";
                        echo "</li>";
                    
                    }
                echo "</ul>";
            }
            echo "<hr>";
    }
    // return $projetos->toJson();
});

Route::get('/alocar', function () {
    $projeto = Projeto::find(4);
    if(isset($projeto)) {
        //$projeto->desenvolvedores()->attach(1, ['horas_semanais'  => 50]);
        $projeto->desenvolvedores()->attach([
            2 => ['horas_semanais' => 20],
            3 => ['horas_semanais' => 30],

        ]);   
    }
});

Route::get('/desalocar', function () {
    $projeto = Projeto::find(4);
    if (isset($projeto)) {
        $projeto->desenvolvedores()->detach([2,3]);   
    }
 
});