<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Brands;
use App\Models\CartItems;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customers', User::query()->whereNot('is_admin')->count()),
            Stat::make('Total Products', Product::query()->where('status', true)->count()),
            Stat::make('Total Orders', Orders::query()->where('status')->count()),
            Stat::make('Total Categories', Categories::query()->count()),
            Stat::make('Total Brands', Brands::query()->count()),
            Stat::make('Total Cart Items', CartItems::query()->count()),

        ];
    }
}
