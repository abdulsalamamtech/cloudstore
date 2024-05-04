<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Address;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

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



    public function role(): HasOne
    {
        return $this->hasOne(Role::class, 'user_id')
                    ->withDefault(function (){
                        return (Auth::user()->is_admin) ?
                        ['name' => 'admin'] :
                        ['name' => 'user'];
                    });
    }



    public function address(): HasMany
    {
        return $this->hasMany(Address::class, 'user_id');
    }


    public function defaultAddress(): HasOne
    {
        return $this->hasOne( DefaultAddress::class, 'user_id');
    }


    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItems::class, 'user_id');
    }


    public function wishlists(): HasMany
    {
        return $this->hasMany(Wishlists::class, 'user_id');
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'user_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'user_id');
    }


    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'user_id');
    }


}
