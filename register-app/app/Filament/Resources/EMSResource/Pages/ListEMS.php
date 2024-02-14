<?php

namespace App\Filament\Resources\EMSResource\Pages;

use App\Filament\Resources\EMSResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEMS extends ListRecords
{
    protected static string $resource = EMSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
