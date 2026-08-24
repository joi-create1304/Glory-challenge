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
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('category')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('status')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('duration')
                        ->nullable(),
                    Textarea::make('description')
                        ->nullable(),


            ]);
    }
}


