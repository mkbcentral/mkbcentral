<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurInfoResource\Pages;
use App\Filament\Resources\OurInfoResource\RelationManagers;
use App\Models\OurInfo;
use Filament\Forms;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurInfoResource extends Resource
{
    protected static ?string $model = OurInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->mask(fn (Mask $mask) => $mask->pattern('+{243} 00-00-00-000'))
                    ->prefixIcon('heroicon-s-phone'),
                Forms\Components\TextInput::make('other_phone')
                    ->tel()
                    ->mask(fn (Mask $mask) => $mask->pattern('+{243} 00-00-00-000'))
                    ->prefixIcon('heroicon-s-phone'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('other_email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\Textarea::make('adress')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->circular(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('other_phone'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('other_email'),
                Tables\Columns\TextColumn::make('adress'),
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
            'index' => Pages\ListOurInfos::route('/'),
            'create' => Pages\CreateOurInfo::route('/create'),
            'edit' => Pages\EditOurInfo::route('/{record}/edit'),
        ];
    }
}
