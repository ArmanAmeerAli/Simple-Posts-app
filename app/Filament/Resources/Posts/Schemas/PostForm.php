<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->unique()
                    ->label('Title'),
                Textarea::make('body')
                    ->required()
                    ->minLength(10)
                    ->label('Body')
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
