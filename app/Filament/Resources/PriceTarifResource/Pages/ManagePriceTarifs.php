<?php

namespace App\Filament\Resources\PriceTarifResource\Pages;

use App\Filament\Resources\PriceTarifResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePriceTarifs extends ManageRecords
{
    protected static string $resource = PriceTarifResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
