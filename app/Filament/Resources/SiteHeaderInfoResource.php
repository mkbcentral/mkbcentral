<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteHeaderInfoResource\Pages;
use App\Filament\Resources\SiteHeaderInfoResource\RelationManagers;
use App\Models\SiteHeaderInfo;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteHeaderInfoResource extends Resource
{
    protected static ?string $model = SiteHeaderInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('paragraph')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                   ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                //Tables\Columns\TextColumn::make('paragraph'),
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
            'index' => Pages\ListSiteHeaderInfos::route('/'),
            'create' => Pages\CreateSiteHeaderInfo::route('/create'),
            'edit' => Pages\EditSiteHeaderInfo::route('/{record}/edit'),
        ];
    }
}
