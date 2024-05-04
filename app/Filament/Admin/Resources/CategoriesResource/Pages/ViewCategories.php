<?php

namespace App\Filament\Admin\Resources\CategoriesResource\Pages;

use App\Filament\Admin\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategories extends ViewRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
