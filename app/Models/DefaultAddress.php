<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DefaultAddress extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class);
    }


    public function address(): BelongsTo
    {
        return $this->belongsTo( Address::class);
    }

}
