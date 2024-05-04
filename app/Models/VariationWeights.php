<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VariationWeights extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'status',
    ];
    
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_variation_weights', 'product_id', 'variation_weight_id');
    }

}
