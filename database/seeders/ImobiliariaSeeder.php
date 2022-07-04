<?php

namespace Database\Seeders;

use App\Models\Corretor;
use App\Models\Imobiliaria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImobiliariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imobiliaria::factory(3)->has(
            Corretor::factory()->count(5), 'corretores'
        )->create();
    }
}
