<?php

namespace App\Filament\Resources\Projects\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Titre')
                    ->required()
                    ->maxLength(255),
                TextInput::make('category')
                    ->label('Catégorie')
                    ->required()
                    ->maxLength(255),
                TextInput::make('status')
                    ->label('Statut')
                    ->required()
                    ->maxLength(255),
                TextInput::make('duration')
                    ->label('Durée')
                    ->nullable(),
                Textarea::make('description')
                    ->label('Description')
                    ->nullable(),


            ]);
    }
}
