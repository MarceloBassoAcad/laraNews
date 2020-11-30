<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => "Esporte",
                'description' => "Veja as últimas notícias do esporte",
                'active' => 1
            ],
            [
                'name' => "Política",
                'description' => "Saiba tudo que está acontecendo ao seu redor",
                'active' => 1
            ],
            [
                'name' => "Empregos",
                'description' => "Precisando de um emprego? veja vagas!",
                'active' => 1
            ]
        ]);
    }
}
