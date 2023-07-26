<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemTarifResource\Pages;
use App\Filament\Resources\ItemTarifResource\RelationManagers;
use App\Models\ItemTarif;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemTarifResource extends Resource
{
    protected static ?string $model = ItemTarif::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('icon'),
                Forms\Components\TextInput::make('color'),
                Forms\Components\Select::make('tarif_id')
                    ->relationship('tarif', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\TextColumn::make('color'),
                Tables\Columns\TextColumn::make('tarif.name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageItemTarifs::route('/'),
        ];
    }
}
