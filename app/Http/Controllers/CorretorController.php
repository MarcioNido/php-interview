<?php

namespace App\Http\Controllers;

use App\Models\Corretor;
use Illuminate\Database\Eloquent\Collection;

class CorretorController extends Controller
{
    /**
     * Lista de Corretores
     * GET /api/corretores
     */
    public function index(): Collection
    {
        return Corretor::with('imobiliaria')->get();
    }
}
