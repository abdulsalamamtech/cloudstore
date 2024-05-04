<?php

namespace App\Models;

use App\Models\Categories;
use App\Models\VariationSizes;
use App\Models\VariationColors;
use App\Models\VariationWeights;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        "name",
        "slug",
        "qty",
        "price",
        "description",
        "information",
        'tags',
        'image_id',
        "brand_id",
        "category_id",
        "status",
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }


    public function productVariationColors(): BelongsToMany
    {
        return $this->belongsToMany(VariationColors::class, 'product_variation_colors', 'product_id', 'variation_color_id');
    }

    public function productVariationSizes(): BelongsToMany
    {
        return $this->belongsToMany(VariationSizes::class, 'product_variation_sizes', 'product_id', 'variation_size_id');
    }

    public function productVariationWeights(): BelongsToMany
    {
        return $this->belongsToMany(VariationWeights::class, 'product_variation_weights', 'product_id', 'variation_weight_id');
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function productImages(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'product_images', 'product_id', 'image_id');
    }

    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItems::class, 'cart_item_id');
    }

    public function wishlist(): HasMany
    {
        return $this->hasMany(Wishlists::class);
    }


}
