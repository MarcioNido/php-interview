<?php

namespace Tests\Http\Controllers;

use App\Models\Corretor;
use App\Models\Imobiliaria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CorretorControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function lista_corretores()
    {
        Imobiliaria::factory(3)->has(
            Corretor::factory()->count(5), 'corretores'
        )->create();

        $response = $this->get('/api/corretores')->assertSuccessful();
        $content = json_decode($response->getContent());

        $this->assertCount(15, $content);
        $this->assertArrayHasKey('imobiliaria', (array) $content[0]);
    }
}
