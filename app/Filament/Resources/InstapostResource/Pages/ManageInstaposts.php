<?php

namespace App\Filament\Resources\InstapostResource\Pages;

use App\Filament\Resources\InstapostResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInstaposts extends ManageRecords
{
    protected static string $resource = InstapostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
