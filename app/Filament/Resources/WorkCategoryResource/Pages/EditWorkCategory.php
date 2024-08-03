<?php

namespace App\Filament\Resources\WorkCategoryResource\Pages;

use App\Filament\Resources\WorkCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkCategory extends EditRecord
{
    protected static string $resource = WorkCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
