<?php

namespace App\Models;

use App\Models\User;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItems extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class, 'user_id');
    }


    public function orders(): BelongsTo
    {
        return $this->belongsTo( Orders::class, 'order_id');
    }


    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
