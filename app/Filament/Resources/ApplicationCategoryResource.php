<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationCategoryResource\Pages;
use App\Filament\Resources\ApplicationCategoryResource\RelationManagers;
use App\Models\ApplicationCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationCategoryResource extends Resource
{
    protected static ?string $model = ApplicationCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rss';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApplicationCategories::route('/'),
            'create' => Pages\CreateApplicationCategory::route('/create'),
            'edit' => Pages\EditApplicationCategory::route('/{record}/edit'),
        ];
    }
}
