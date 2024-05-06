<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Models\Image;
use Filament\Actions;
use App\Models\Product;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Admin\Resources\ProductResource;

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
        $image = Image::find($data['image_id']);
        $data['path'] = $image->url ?? ($image->path ?? '');

        // For product images
        $images = Product::find($data['id'])->productImages;
        foreach($images as $image){
            $image_path[] =  $image->url ?? ($image->path ?? '');
        }
        $data['images'] = $image_path ?? '';

        return $data;

    }
}
