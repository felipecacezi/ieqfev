<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class ServiceDetail extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.service-detail';

    protected static bool $shouldRegisterNavigation = false;

    public function getHeading(): string | Htmlable
    {
        return '';
    }
}
