<?php

namespace App\Http\Controllers;

use App\Models\Imobiliaria;
use Illuminate\Database\Eloquent\Collection;

class ImobiliariaController extends Controller
{
    /**
     * Lista de Imobiliarias
     * GET /api/imobiliarias
     */
    public function index(): Collection
    {
        return Imobiliaria::all();
    }
}
