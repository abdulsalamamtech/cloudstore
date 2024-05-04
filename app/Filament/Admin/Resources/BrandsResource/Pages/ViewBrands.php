<?php

namespace App\Filament\Admin\Resources\BrandsResource\Pages;

use App\Filament\Admin\Resources\BrandsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBrands extends ViewRecord
{
    protected static string $resource = BrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
