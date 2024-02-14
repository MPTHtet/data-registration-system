<?php

namespace App\Filament\Resources\EMSResource\Pages;

use App\Filament\Resources\EMSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEMS extends EditRecord
{
    protected static string $resource = EMSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
