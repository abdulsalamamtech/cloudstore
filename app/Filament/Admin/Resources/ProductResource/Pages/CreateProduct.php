<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Models\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\ProductResource;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function storeImage($path, $data = 'unknown'){
        return Image::create([
            'type' => 'image',
            'path' => $path,
            'url' => 'https://lh3.googleusercontent.com/a/ACg8ocKHSSpSjyisUQ6EitNvGaafQL5UGhxN_zRSj1l4_4gnbb_55IQ=s96-c',
            'file_id' => random_int(10, 99),
            'size' => random_int(1, 9),
            'data' => $data ?? 'unknown',
        ]);
    }

    protected function handleRecordCreation(array $data): Model
    {

            // Store product image
            $image = $this->storeImage($data['path']);
            $data['image_id'] = $image->id;

            // Store product data
            $record = static::getModel()::create($data);

            // Handle and store product images
            $images = $data['images'];
            foreach($images as $image){
                $store_image = $this->storeImage($image);
                $record->productImages()->attach($store_image->id);
            }

            Log::info('Product created successfully: ' . $record->id);
            return $record;

    }

}
