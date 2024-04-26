<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory;

    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'payment_method_id');
    }
}
