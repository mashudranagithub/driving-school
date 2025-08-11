<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-pound';
    protected static ?string $navigationLabel = 'Price Packages';
    protected static ?string $navigationGroup = 'Website Content';
    protected static ?int $navigationSort = 3;     // Not needed unless auto-sorting

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('icon')->required()->placeholder('e.g. fas fa-car'),
            TextInput::make('title')->required(),
            TextInput::make('price')->required(),
            Textarea::make('description')
                ->required()
                ->minLength(10)
                ->maxLength(120)
                ->label('Description (Max 120 characters)'),

            TagsInput::make('features')->label('Features'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('price'),
                TextColumn::make('features')
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state)
                    ->limit(40),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
