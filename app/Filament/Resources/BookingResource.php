<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\IconPosition;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
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
    protected static ?string $navigationGroup = 'Website Content';


    protected static ?string $navigationLabel = 'Bookings';
    protected static ?int $navigationSort = 5;     // Not needed unless auto-sorting


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

            Select::make('status')
                ->label('Status')
                ->options([
                    'Pending' => 'Pending',
                    'Contacted' => 'Contacted',
                    'Booked' => 'Booked',
                    'Course complete' => 'Course complete',
                    'Passed' => 'Passed',
                    'Not Interested' => 'Not Interested',
                ])
                ->default('Pending')
                ->required(),

        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('postcode')->searchable(),
                TextColumn::make('previous_lessons')->searchable(),
                TextColumn::make('theory_test')->searchable(),
                TextColumn::make('transmission')->searchable(),
                TextColumn::make('created_at')->dateTime('d M Y, h:i A'),
                TextColumn::make('status')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->colors([
                        'warning' => 'Pending',
                        'info' => 'Contacted',
                        'success' => 'Booked',
                        'danger' => 'Course complete',
                        'primary' => 'Passed',
                        'secondary' => 'Not Interested',
                    ]),
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

    protected function isTableWrapped(): bool
    {
        return false; // 💥 Disables the card wrapper = full width
    }

}
