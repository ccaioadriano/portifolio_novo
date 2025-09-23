<?php

namespace App\Filament\Resources\Stacks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('icon_path'),
            ]);
    }
}
