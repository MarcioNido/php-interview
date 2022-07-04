<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Imobiliaria extends Model
{
    use HasFactory;

    protected $table = 'imobiliarias';
    protected $fillable = ['nome'];

    public function corretores(): HasMany
    {
        return $this->hasMany(Corretor::class, 'imobiliaria_id', 'id');
    }
}
