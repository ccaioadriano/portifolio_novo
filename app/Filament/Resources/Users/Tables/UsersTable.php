<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nome'),
                TextColumn::make('email')->label('Email'),
                IconColumn::make('email_verified_at')
                    ->boolean()
                    ->label('Verificado'),
            ])
            ->actions([
                EditAction::make(),
                Action::make('verifyEmail')
                    ->label('Marcar como Verificado')
                    ->icon('heroicon-o-check-circle')
                    ->visible(fn($record) => !$record->hasVerifiedEmail())
                    ->requiresConfirmation()
                    ->action(function ($record) {
                        $record->markEmailAsVerified();

                        Notification::make()
                            ->title('Email marcado como verificado!')
                            ->success()
                            ->send();
                    }),
            ]);
    }
}
