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
        return $this->belongsTo( User::class, 'user_id');
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo( PaymentMethod::class, 'payment_method_id');
    }

    public function shippingMethod(): BelongsTo
    {
        return $this->belongsTo( ShippingMethod::class, 'shipping_method_id');
    }

    public function orderStatus(): BelongsTo
    {
        return $this->belongsTo( OrderStatus::class, 'order_status_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'order_id');
    }

}
