<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('title')
                ->required()
                ->maxLength(255),

            TextInput::make('slug')
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            Textarea::make('short_description')
                ->rows(3)
                ->maxLength(500),

            RichEditor::make('long_description')
                ->columnSpanFull(),

            FileUpload::make('cover_image')
                ->label('Imagem de Capa')
                ->disk('public') // ou 'r2' se já estiver configurado
                ->directory('projects/cover')
                ->image()
                ->visibility('public'),

            FileUpload::make('gallery')
                ->label('Galeria')
                ->disk('public')
                ->directory('projects/gallery')
                ->image()
                ->imagePreviewHeight(50)
                ->visibility('public')
                ->multiple()
                ->reorderable()
                ->maxFiles(5),

            TextInput::make('project_url')
                ->url()
                ->maxLength(255)
                ->prefixIcon('heroicon-o-link'),

            TextInput::make('repository_url')
                ->url()
                ->maxLength(255)
                ->prefixIcon('heroicon-o-code-bracket'),

            Select::make('stacks')
                ->relationship('stacks', 'title')
                ->multiple()
                ->searchable()
                ->preload()
                ->label('Stacks Utilizadas'),
        ]);
    }
}
