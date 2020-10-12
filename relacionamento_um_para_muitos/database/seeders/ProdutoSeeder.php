<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('produtos')->insert(
            ['nome' => 'Camiseta Polo', 'preco'=>100,
            'estoque'=> 4, 'categoria_id' =>1]);
        DB::table('produtos')->insert(
            ['nome' => 'Calça Jeans', 'preco'=>150,
            'estoque'=> 2, 'categoria_id' =>1]);
    
        DB::table('produtos')->insert(
            ['nome' => 'Camiseta Nike', 'preco'=>300,
            'estoque'=> 5, 'categoria_id' =>1]);
    
        DB::table('produtos')->insert(
            ['nome' => 'Pc Gamer', 'preco'=>2400,
            'estoque'=> 8, 'categoria_id' =>2]);
        DB::table('produtos')->insert(
            ['nome' => 'Impressora', 'preco'=>600,
            'estoque'=> 44, 'categoria_id' =>6   ]);
        DB::table('produtos')->insert(
            ['nome' => 'Mouse', 'preco'=>100,
            'estoque'=> 24, 'categoria_id' =>6]);
        DB::table('produtos')->insert(
            ['nome' => 'Perfume', 'preco'=>1400,
            'estoque'=> 94, 'categoria_id' =>3]);
        DB::table('produtos')->insert(
            ['nome' => 'Cama de casal', 'preco'=>900,
            'estoque'=> 64, 'categoria_id' =>4]);
        DB::table('produtos')->insert(
            ['nome' => 'Móveis', 'preco'=>2670,
            'estoque'=> 24, 'categoria_id' =>4]);
    }


}
