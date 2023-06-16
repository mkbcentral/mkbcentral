<?php

namespace App\Filament\Resources\SiteHeaderInfoResource\Pages;

use App\Filament\Resources\SiteHeaderInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteHeaderInfos extends ListRecords
{
    protected static string $resource = SiteHeaderInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
