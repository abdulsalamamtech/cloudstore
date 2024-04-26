<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Address;
use App\Models\Wishlists;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }


    public function defaultAddress(): HasOne
    {
        return $this->hasOne( DefaultAddress::class);
    }


    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItems::class);
    }


    public function wishlists(): HasMany
    {
        return $this->hasMany(Wishlists::class);
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class);
    }


    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    
}
