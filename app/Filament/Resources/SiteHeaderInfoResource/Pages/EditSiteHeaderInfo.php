<?php

namespace App\Filament\Resources\SiteHeaderInfoResource\Pages;

use App\Filament\Resources\SiteHeaderInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteHeaderInfo extends EditRecord
{
    protected static string $resource = SiteHeaderInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
