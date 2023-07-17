<?php

namespace App\Filament\Resources\TarifResource\Pages;

use App\Filament\Resources\TarifResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTarifs extends ManageRecords
{
    protected static string $resource = TarifResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
