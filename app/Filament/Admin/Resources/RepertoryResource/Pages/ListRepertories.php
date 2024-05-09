<?php

namespace App\Filament\Admin\Resources\RepertoryResource\Pages;

use App\Filament\Admin\Resources\RepertoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRepertories extends ListRecords
{
    protected static string $resource = RepertoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Nova Música'),
        ];
    }
}
