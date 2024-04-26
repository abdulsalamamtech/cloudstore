<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImages extends Model
{
    use HasFactory;

    public function product(): BelongsTo
    {
        return $this->belongsTo( Product::class, 'product_id');
    }

    public function images(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
