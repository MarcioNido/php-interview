<?php

namespace Tests\Http\Controllers;

use App\Models\Imobiliaria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImobiliariaControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function lista_imobiliarias()
    {
        Imobiliaria::factory(3)->create();

        $response = $this->get('/api/imobiliarias')->assertSuccessful();
        $content = json_decode($response->getContent());
        $this->assertCount(3, $content);
    }
}
