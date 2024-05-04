<?php

namespace App\Models;

use App\Models\Brands;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type', 'file_id', 'url', 'path', 'size', 'data', 'status',
    ];

    public function brands(): HasMany
    {
        return $this->hasMany(Brands::class, 'image_id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class, 'image_id');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'image_id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_images', 'product_id', 'image_id');
    }
}
