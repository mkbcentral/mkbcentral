<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tarif extends Model
{
    use HasFactory;
    protected $fillable=['name','description','plan_tarif_id'];
    /**
     * Get the planTarif that owns the Tarif
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function planTarif(): BelongsTo
    {
        return $this->belongsTo(PlanTarif::class, 'plan_tarif_id');
    }
    /**
     * Get the priceTarif that owns the Tarif
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function priceTarif():HasOne
    {
        return $this->hasOne(PriceTarif::class);
    }

    /**
     * Get all of the itemTarifs for the Tarif
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itemTarifs(): HasMany
    {
        return $this->hasMany(ItemTarif::class);
    }
}
