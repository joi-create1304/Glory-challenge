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
                    ->searchable(),
                Textarea::make('email')
                    ->searchable(),
                Textarea::make('subject')
                    ->nullable(),
                Textarea::make('message')
                    ->nullable(),
                Toggle::make('is_read')
                    ->default(false),
            ]);
    }
}


