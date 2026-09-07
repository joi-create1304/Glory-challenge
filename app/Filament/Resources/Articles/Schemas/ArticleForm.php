<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('title')
                ->label('Titre')
                    ->required(),
                Textarea::make('excerpt')
                    ->label('Extrait')
                    ->nullable(),
                RichEditor::make('content')
                    ->label('Contenu')
                    ->nullable(),
                FileUpload::make('cover_image')
                    ->label('Image de Couverture')
                    ->nullable(),
                DateTimePicker::make('published_at')
                    ->label('Publié le')
                    ->nullable(),

            ]);
    }
}
