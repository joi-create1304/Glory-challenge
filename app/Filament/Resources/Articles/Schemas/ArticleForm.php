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
                    ->searchable(),
                Textarea::make('slug')
                    ->unique()
                    ->searchable(),
                Textarea::make('excerpt')
                    ->nullable(),
                RichEditor::make('content'),
                FileUpload::make('cover_image')
                    ->nullable(),
                DateTimePicker::make('published_at')
                    ->nullable(),

            ]);
    }
}


