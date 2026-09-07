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
                    ->label('Titre')
                    ->required()
                    ->maxLength(255),

                TextInput::make('icon')
                    ->label('Icône')
                    ->maxLength(10),

                Textarea::make('description')
                    ->label('Description')
                    ->required(),

                Textarea::make('content')
                    ->label('Contenu'),

                TextInput::make('order')
                    ->label('Ordre')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
