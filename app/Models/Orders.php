<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class);
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo( PaymentMethod::class);
    }

    public function shippingMethod(): BelongsTo
    {
        return $this->belongsTo( ShippingMethod::class);
    }

    public function orderStatus(): BelongsTo
    {
        return $this->belongsTo( OrderStatus::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class);
    }

}
