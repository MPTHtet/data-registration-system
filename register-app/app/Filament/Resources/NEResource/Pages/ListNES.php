<?php

namespace App\Filament\Resources\NEResource\Pages;

use App\Filament\Resources\NEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNES extends ListRecords
{
    protected static string $resource = NEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
