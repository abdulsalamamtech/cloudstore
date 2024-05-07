<?php

namespace App\Filament\Admin\Resources\ShippingMethodResource\Pages;

use App\Filament\Admin\Resources\ShippingMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewShippingMethod extends ViewRecord
{
    protected static string $resource = ShippingMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
