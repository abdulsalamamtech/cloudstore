<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use Exception;
use App\Models\Image;
use Filament\Actions;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\ProductResource;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    // protected function handleRecordCreation(array $data): Model
    // {
    //     dd($data);
    // }

    // protected function handleRecordCreation(array $data): Model
    // {
    //     try {

    //         // dd($data);

    //         DB::beginTransaction();

    //         // $record = static::getModel()::create($data);
    //         // $record->detail()->create($data['detail']);
    //         // $image = Image::create([
    //         //     'type' => 'image',
    //         //     'path' => $data['path'],
    //         //     'url' => 'https://lh3.googleusercontent.com/a/ACg8ocKHSSpSjyisUQ6EitNvGaafQL5UGhxN_zRSj1l4_4gnbb_55IQ=s96-c',
    //         //     'file_id' => random_int(10, 99),
    //         //     'size' => random_int(1, 9),
    //         //     'data' => 'data' . random_bytes(8),
    //         // ]);
    //         // $record = Product::create([
    //         //     'name' => $data['name'],
    //         //     'slug' => $data['slug'],
    //         //     'qty' => $data['qty'],
    //         //     'price' => $data['price'],
    //         //     'description' => $data['description'],
    //         //     'information' => $data['information'],
    //         //     'tags' => $data['tags'],
    //         //     'brand_id' => $data['brand_id'],
    //         //     'category_id' => $data['category_id'],
    //         //     'image_id' => $image->id,
    //         //     'status' => $data['status'],
    //         // ]);
    //         // $record->productVariationColors()->attach($data['color']);
    //         // $record->productVariationSizes()->attach($data['size']);

    //         $images = $data['images'];
    //         $image_arr = [];
    //         foreach($images as $image){
    //             $image_arr[] =
    //             // Image::create(
    //                 [
    //                 'type' => 'image',
    //                 'path' => $image,
    //                 ];
    //         // );
    //         }




    //         dd($image_arr);


    //         $record = $data;

    //         Log::info('Image, Color, Size, weight and Product created successfully: ' . $record->id);
    //         DB::commit();

    //         // return $record;



    //     } catch (\Exception $e) {

    //         Log::error('Error creating product: ' . $e->getMessage());
    //         DB::rollback();

    //     }
    // }

}
