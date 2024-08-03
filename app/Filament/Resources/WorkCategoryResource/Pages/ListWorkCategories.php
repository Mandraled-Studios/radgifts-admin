<?php

namespace App\Filament\Resources\WorkCategoryResource\Pages;

use App\Filament\Resources\WorkCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkCategories extends ListRecords
{
    protected static string $resource = WorkCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
