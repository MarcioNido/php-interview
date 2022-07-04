<?php

namespace App\Http\Controllers;

use App\Models\Imobiliaria;
use Illuminate\Http\Response;

class ImobiliariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Imobiliaria::all();
    }
}
