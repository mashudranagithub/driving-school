<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
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

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationLabel = 'About Us';
    protected static ?int $navigationSort = 1;     // Not needed unless auto-sorting
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Website Content';



    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required(),
            TextInput::make('subtitle')->required(),
            Textarea::make('area_covers')->rows(6)->label('Area Covers (comma-separated)'),
            TextInput::make('phone')->tel()->label('Phone Number'),
            TextInput::make('email')->email(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->searchable(),
                TextColumn::make('subtitle')->label('Subtitle')->limit(50),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('created_at')->label('Created')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }

}
