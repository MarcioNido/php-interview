<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Collection;

class EquipeController extends Controller
{
    /**
     * Lista de Equipes
     * GET /api/equipes
     */
    public function index(): Collection
    {
        return Equipe::with(['imobiliaria','corretores'])->get();
    }
}
