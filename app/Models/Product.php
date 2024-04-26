<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function productVariation(): BelongsTo
    {
        return $this->belongsTo(ProductVariation::class, 'product_variation_id');
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function productImage(): HasMany
    {
        return $this->hasMany(ProductImages::class, 'product_id');
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
