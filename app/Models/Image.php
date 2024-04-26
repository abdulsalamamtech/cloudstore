<?php

namespace App\Models;

use App\Models\Brands;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;


    public function brands(): HasMany
    {
        return $this->hasMany(Brands::class, 'image_id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class, 'image_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'image_id');
    }
}
