<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Models\Product;
use Filament\Actions;
use App\Models\Image;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Admin\Resources\ProductResource;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

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
        // For product image
        $image = Image::find($data['image_id'])->url;
        $data['in'] = $image;
        // $data['path'] = ($image->url != '') ? $image->url : $image->path;
        // $img = '<img src="'. $data['path'] .'">';
        // dd($data['path']);
        // print($img);

        // For product images
        $images = Product::find($data['id'])->productImages;
        foreach($images as $image){
            $image_path[] =  $image->url ?? ($image->path ?? '');
        }
        $data['images'] = $image_path ?? '';

        return $data;
    }
}
