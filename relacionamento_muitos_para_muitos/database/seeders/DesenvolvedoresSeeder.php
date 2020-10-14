<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('desenvolvedores')->insert(['nome' => 'Lucas Oliveira', 'cargo' => 'Desenvolvedor mobile']);

        DB::table('desenvolvedores')->insert(['nome' => 'Joao Oliveira', 'cargo' => 'Desenvolvedor full stack']);

        DB::table('desenvolvedores')->insert(['nome' => 'Pedro Oliveira', 'cargo' => 'Engenheiro de front end']);


    }
}
