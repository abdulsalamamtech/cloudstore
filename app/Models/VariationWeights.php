<?php

namespace App\Models;

use App\Models\ProductVariation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VariationWeights extends Model
{
    use HasFactory;

    public function productVariation(): HasMany
    {
        return $this->hasMany(ProductVariation::class, 'variation_weight_id');
    }
}
