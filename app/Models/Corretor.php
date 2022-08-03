<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Corretor extends Model
{
    use HasFactory;

    protected $table = 'corretores';
    protected $fillable = ['nome'];

    public function imobiliaria(): BelongsTo
    {
        return $this->belongsTo(Imobiliaria::class, 'imobiliaria_id', 'id');
    }

    public function equipe(): BelongsTo
    {
        return $this->belongsTo(Equipe::class, 'equipe_id', 'id');
    }

}
