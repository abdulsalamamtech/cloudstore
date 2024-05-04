<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'name',
        'parent_id',
        'status',
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo( Categories::class, 'parent_id');
    }


    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
