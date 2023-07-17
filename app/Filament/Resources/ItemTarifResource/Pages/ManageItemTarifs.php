<?php

namespace App\Filament\Resources\ItemTarifResource\Pages;

use App\Filament\Resources\ItemTarifResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageItemTarifs extends ManageRecords
{
    protected static string $resource = ItemTarifResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
