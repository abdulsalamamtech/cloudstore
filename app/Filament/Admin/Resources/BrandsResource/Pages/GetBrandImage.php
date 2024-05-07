<?php

namespace App\Filament\Admin\Resources\BrandsResource\Pages;

use App\Models\Image;

class GetBrandImage{

    public static function Image($image_id){
        $image_path = '';
        if($image_id){
            $image = Image::find($image_id);
            $image_path = $image->path ?? $image->url;
        }
        return $image_path;
    }
}
