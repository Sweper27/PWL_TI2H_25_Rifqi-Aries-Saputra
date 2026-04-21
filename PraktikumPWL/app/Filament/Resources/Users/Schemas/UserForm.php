<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('name')
                ->label('Name')
                ->required(),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->unique(ignoreRecord: true),//email unik

            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->minLength(6)//minim karakter pass
                ->dehydrateStateUsing(fn ($state) => bcrypt($state)),

            Select::make('role')
                ->label('Role')
                ->options([
                    'buyer' => 'Buyer',
                    'seller' => 'Seller',
                ])
                ->required(),
        ]);
    }
}
