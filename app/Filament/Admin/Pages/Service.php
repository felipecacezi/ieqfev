<?php

namespace App\Filament\Admin\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class Service extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.service';

    protected static ?string $navigationLabel = 'Agenda';

    public function getHeading(): string | Htmlable
    {
        return 'Agenda';
    }

    public static function shouldRegisterNavigation(): bool
    {
        if (User::isSuperUser()) {
            return true;
        } else {
            return false;
        }
    }

}
