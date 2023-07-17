<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PriceTarif extends Model
{
    use HasFactory;
    protected $fillable=['price','tarif_id'];
    /**
     * Get the tarif that owns the PriceTarif
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tarif(): BelongsTo
    {
        return $this->belongsTo(Tarif::class, 'tarif_id');
    }
}

