<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('projetos')->insert(['nome' => 'sistema de alocação de recursos', 'estimativa_horas' => 200]);

        DB::table('projetos')->insert(['nome' => 'sistema de bibliotecas de recursos', 'estimativa_horas' => 300]);

        DB::table('projetos')->insert(['nome' => 'sistema de vendas de recursos', 'estimativa_horas' => 600]);

        DB::table('projetos')->insert(['nome' => 'novo sistema completo', 'estimativa_horas' => 1100]);
    }
}
