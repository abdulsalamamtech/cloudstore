<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brands extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'name',
        'status',
        'image_id',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo( Image::class, 'image_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}
