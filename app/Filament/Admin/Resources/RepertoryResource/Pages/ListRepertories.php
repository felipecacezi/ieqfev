<?php

namespace App\Filament\Admin\Resources\RepertoryResource\Pages;

use App\Models\User;
use Filament\Actions;
use Illuminate\Support\Facades\Gate;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\RepertoryResource;

class ListRepertories extends ListRecords
{
    protected static string $resource = RepertoryResource::class;

    protected function getHeaderActions(): array
    {        
        if (User::isSuperUser() || User::isAdmin()) {
            return [
                Actions\CreateAction::make()
                ->label('Nova Música'),
            ];
        } else {
            return [];
        }
    }

    
}
