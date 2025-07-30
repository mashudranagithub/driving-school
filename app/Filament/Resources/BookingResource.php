<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Radio;
use Filament\Tables\Columns\TextColumn;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(100),

            TextInput::make('email')
                ->required()
                ->email(),

            TextInput::make('phone')
                ->required(),

            TextInput::make('postcode')
                ->required()
                ->maxLength(8),

            Radio::make('previous_lessons')
                ->options([
                    'yes' => 'Yes',
                    'no' => 'No',
                ])
                ->required(),

            Radio::make('theory_test')
                ->options([
                    'yes' => 'Yes',
                    'no' => 'No',
                ])
                ->required(),

            Radio::make('transmission')
                ->options([
                    'manual' => 'Manual',
                    'automatic' => 'Automatic',
                ])
                ->required(),

            Textarea::make('message')
                ->maxLength(500),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone'),
                TextColumn::make('postcode'),
                TextColumn::make('previous_lessons'),
                TextColumn::make('theory_test'),
                TextColumn::make('transmission'),
                TextColumn::make('created_at')->dateTime('d M Y, h:i A'),
            ])
            ->filters([])
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
