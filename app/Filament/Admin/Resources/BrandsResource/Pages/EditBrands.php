<?php

namespace App\Filament\Admin\Resources\BrandsResource\Pages;

use App\Models\Image;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Admin\Resources\BrandsResource;

class EditBrands extends EditRecord
{
    protected static string $resource = BrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // For brand image;
        $data['path'] = GetBrandImage::Image($data['image_id']);

        return $data;

    }
}
