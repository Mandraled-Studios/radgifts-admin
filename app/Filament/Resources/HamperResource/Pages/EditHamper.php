<?php

namespace App\Filament\Resources\HamperResource\Pages;

use App\Filament\Resources\HamperResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHamper extends EditRecord
{
    protected static string $resource = HamperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
