<?php

namespace App\Filament\Admin\Resources\BrandsResource\Pages;

use App\Models\Image;
use Filament\Actions;
use App\Models\Brands;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\BrandsResource;
use Illuminate\Database\Events\TransactionBeginning;

class CreateBrands extends CreateRecord
{
    protected static string $resource = BrandsResource::class;



    protected function handleRecordCreation(array $data): Model
    {
        try {
            DB::beginTransaction();
            // $record = static::getModel()::create($data);
            // $record->detail()->create($data['detail']);
            $image = Image::create([
                'type' => 'image',
                'path' => $data['path'],
                'url' => 'https://lh3.googleusercontent.com/a/ACg8ocKHSSpSjyisUQ6EitNvGaafQL5UGhxN_zRSj1l4_4gnbb_55IQ=s96-c',
                'file_id' => random_int(10, 99),
                'size' => random_int(1, 9),
                'data' => 'data' . random_bytes(8),
            ]);
            $record = Brands::create([
                'name' => $data['name'],
                'image_id' => $image->id,
               'status' => $data['status'],
            ]);

            Log::info('Image and Brand created successfully: ' . $record->id);
            DB::commit();

            return $record;
        } catch (\Exception $e) {
            Log::error('Error creating employee: ' . $e->getMessage());
            DB::rollback();

            throw $e;
        }
    }



}
