<?php

namespace App\Filament\Resources\PlanTarifResource\Pages;

use App\Filament\Resources\PlanTarifResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePlanTarifs extends ManageRecords
{
    protected static string $resource = PlanTarifResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
