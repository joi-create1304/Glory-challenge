<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                TextInput::make('icon')
                    ->maxLength(10),

                Textarea::make('description')
                    ->required(),

                Textarea::make('content'),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
