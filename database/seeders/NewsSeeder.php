<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creación de contenido falso en la tabla News:
        \App\Models\News::factory(10)->create();
    }
}
