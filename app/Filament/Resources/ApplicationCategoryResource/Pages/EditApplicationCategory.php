<?php

namespace App\Filament\Resources\ApplicationCategoryResource\Pages;

use App\Filament\Resources\ApplicationCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApplicationCategory extends EditRecord
{
    protected static string $resource = ApplicationCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
