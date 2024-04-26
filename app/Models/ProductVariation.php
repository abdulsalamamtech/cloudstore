<?php

namespace App\Models;

use App\Models\Product;
use App\Models\VariationSizes;
use App\Models\VariationColors;
use App\Models\VariationWeights;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariation extends Model
{
    use HasFactory;


    public function product(): BelongsTo
    {
        return $this->belongsTo( Product::class);
    }

    public function variationColors(): BelongsTo
    {
        return $this->belongsTo(VariationColors::class);
    }
    public function variationSizes(): BelongsTo
    {
        return $this->belongsTo(VariationSizes::class);
    }
    public function variationWeights(): BelongsTo
    {
        return $this->belongsTo(VariationWeights::class);
    }
    

}
