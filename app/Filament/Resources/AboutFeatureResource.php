<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutFeatureResource\Pages;
use App\Filament\Resources\AboutFeatureResource\RelationManagers;
use App\Models\AboutFeature;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutFeatureResource extends Resource
{
    protected static ?string $model = AboutFeature::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    protected static ?string $navigationGroup = 'Website Content';
    protected static ?string $navigationLabel = 'About Features';
    protected static ?int $navigationSort = 2;     // Not needed unless auto-sorting

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('icon')->required()->label('Icon Class (e.g., fas fa-car)'),
                TextInput::make('title')->required(),
                Textarea::make('description')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('icon')->label('Icon')->limit(20),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('description')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAboutFeatures::route('/'),
            'create' => Pages\CreateAboutFeature::route('/create'),
            'edit' => Pages\EditAboutFeature::route('/{record}/edit'),
        ];
    }
}
