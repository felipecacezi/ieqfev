<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Illuminate\Support\Js;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;
use App\Filament\Admin\Resources\RepertoryResource;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->modalSubmitActionLabel('Excluir')
                ->modalCancelActionLabel('Cancelar')
                ->modalHeading('Você realmente deseja excluir este usuário?')
                ->modalDescription('Se você excluir este usuário ele perderá acesso ao sistema.')
                ->label('Excluir'),
        ];
    }

    public function getBreadcrumb(): string
    {
        return 'Editar';
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label('Gravar')
            ->submit('save')
            ->keyBindings(['mod+s']);
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label('Cancelar')
            ->alpineClickHandler('document.referrer ? window.history.back() : (window.location.href = ' . Js::from($this->previousUrl ?? static::getResource()::getUrl()) . ')')
            ->color('gray');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Atualizado com sucesso';
    }

    public function getTitle(): string | Htmlable
    {
        return 'Editar Usuário';
    }
}
