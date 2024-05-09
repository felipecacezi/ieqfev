<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Throwable;
use Illuminate\Support\Js;
use Filament\Actions\Action;
use Filament\Support\Exceptions\Halt;
use Filament\Support\Facades\FilamentView;
use Illuminate\Contracts\Support\Htmlable;
use App\Filament\Admin\Resources\RepertoryResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getFormActions(): array
    {
        return [
            ...(static::canCreateAnother() ? [$this->getCreateAnotherFormAction()] : []),
            $this->getCancelFormAction(),
        ];
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return Action::make('createAnother')
            ->label('Gravar')
            ->action('createAnother')
            ->keyBindings(['mod+shift+s'])
            ->color('primary');
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label('Cancelar')
            ->alpineClickHandler('document.referrer ? window.history.back() : (window.location.href = ' . Js::from($this->previousUrl ?? static::getResource()::getUrl()) . ')')
            ->color('gray');
    }

    public function getBreadcrumb(): string
    {
        return 'Novo Usuário';
    }

    public function getTitle(): string | Htmlable
    {
        return 'Novo Usuário';
    }
}
