<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('name')
                    ->label('Nom')
                    ->required(),
                Textarea::make('email')
                    ->label('Email')
                    ->required(),
                Textarea::make('subject')
                    ->label('Sujet')
                    ->nullable(),
                Textarea::make('message')
                    ->label('Message')
                    ->nullable(),
                Toggle::make('is_read')
                    ->label('Lu')
                    ->default(false),
            ]);
    }
}


