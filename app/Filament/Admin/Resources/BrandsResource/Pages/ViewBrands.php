<?php

namespace App\Filament\Admin\Resources\BrandsResource\Pages;

use App\Models\Image;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Admin\Resources\BrandsResource;

class ViewBrands extends ViewRecord
{
    protected static string $resource = BrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // For brand image;
        $data['path'] = GetBrandImage::Image($data['image_id']);

        return $data;

    }
}
