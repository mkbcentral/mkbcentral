<?php

namespace App\Filament\Resources\OurInfoResource\Pages;

use App\Filament\Resources\OurInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurInfos extends ListRecords
{
    protected static string $resource = OurInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
