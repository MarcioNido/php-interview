<?php

namespace Tests\Http\Controllers;

use App\Models\Equipe;
use App\Models\Imobiliaria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EquipeControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function lista_equipes()
    {
        Imobiliaria::factory(3)->has(
            Equipe::factory()->count(3), 'equipes'
        )->create();

        $response = $this->get('/api/equipes')->assertSuccessful();
        $content = json_decode($response->getContent());

        $this->assertCount(9, $content);
        $this->assertArrayHasKey('imobiliaria', (array) $content[0]);
        $this->assertArrayHasKey('corretores', (array) $content[0]);

    }
}
