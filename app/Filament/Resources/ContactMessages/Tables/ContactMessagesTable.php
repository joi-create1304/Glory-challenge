<?php

namespace App\Filament\Resources\ContactMessages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactMessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('subject')
                    ->label('Sujet'),
                TextColumn::make('message')
                    ->label('Message'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('toggleRead')
                    ->label(fn($record) => $record->is_read ? 'Marquer non lu' : 'Marquer comme lu')
                    ->icon(fn($record) => $record->is_read ? 'heroicon-o-envelope' : 'heroicon-o-envelope-open')
                    ->action(fn ($record) => $record->update(['is_read' => !$record->is_read])),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
