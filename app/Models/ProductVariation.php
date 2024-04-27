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
        return $this->belongsTo( Product::class, 'product_id');
    }

    public function variationColors(): BelongsTo
    {
        return $this->belongsTo(VariationColors::class, 'variation_color_id');
    }
    public function variationSizes(): BelongsTo
    {
        return $this->belongsTo(VariationSizes::class, 'variation_size_id');
    }
    public function variationWeights(): BelongsTo
    {
        return $this->belongsTo(VariationWeights::class, 'variation_weight_id');
    }


}
