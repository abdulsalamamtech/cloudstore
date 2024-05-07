<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Admin\Resources\ProductResource;
use App\Filament\Admin\Resources\ProductResource\Pages\GetProductImage;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // For product image
        $image = GetProductImage::BannerImage($data['image_id']);
        $data['path'] = $image;

        // For product images
        $product_images = GetProductImage::Images($data['id']);
        $data['images'] = $product_images ?? '';

        return $data;

    }
}
