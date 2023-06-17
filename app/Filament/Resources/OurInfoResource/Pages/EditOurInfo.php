<?php

namespace App\Filament\Resources\OurInfoResource\Pages;

use App\Filament\Resources\OurInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurInfo extends EditRecord
{
    protected static string $resource = OurInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
