<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderStatus extends Model
{
    use HasFactory;

    public function orders(): HasMany
    {
        return $this->hasMany(Address::class, 'order_status_id');
    }


}
