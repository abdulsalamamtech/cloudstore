<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Models\Image;
use App\Models\Product;

class GetProductImage{

    public static function BannerImage($image_id){
        $image_path = '';
        if($image_id){
            $image = Image::find($image_id);
            $image_path = $image->path ?? $image->url;
        }
        return $image_path ?? '';
    }
    public static function Images($product_id){
        $image_path = [];
        if($product_id){
            $images = Product::find($product_id)->productImages;
            foreach($images as $image){
                $image_path[] =  $image->path ?? $image->url;
            }
        }
        return $image_path ?? '';
    }
}
