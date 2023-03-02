<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Forms\Components;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),

            /**
             * Uncomment the lines below and press the button.
             * On itself, it works fine
             */
//            Actions\Action::make('update-email')
//                ->icon('heroicon-o-pencil')
//                ->color('warning')
//                ->action('update'),

            Actions\ActionGroup::make([
                /**
                 * Within a Group, it doesn't
                 */
                Actions\Action::make('update-email')
                    ->icon('heroicon-o-pencil')
                    ->color('warning')
//                    ->action('update'),
            ]),
        ];
    }

    public function update()
    {
        Notification::make()
            ->title('Email updated!')
            ->send();
    }
}
