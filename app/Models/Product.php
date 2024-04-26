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
        return $this->belongsTo(Brands::class, 'brand_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }


    public function image(): HasMany
    {
        return $this->hasMany(Image::class, 'image_id', 'id');
    }

    public function productImage(): HasMany
    {
        return $this->hasMany(ProductImages::class);
    }

    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItems::class, 'cart_item_id', 'id');
    }

    public function wishlist(): HasMany
    {
        return $this->hasMany(Wishlists::class);
    }


}
