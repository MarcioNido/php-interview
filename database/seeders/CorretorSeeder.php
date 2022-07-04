<?php

namespace Database\Seeders;

use App\Models\Corretor;
use Illuminate\Database\Seeder;

class CorretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Corretor::factory(10)->create();
    }
}
