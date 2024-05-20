<?php

namespace App\Filament\Admin\Resources\ServiceResource\Widgets;

use App\Filament\Admin\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    protected static string $view = 'filament.admin.resources.service-resource.widgets.calendar-widget';
    public Model | string | null $model = Service::class;

    public function fetchEvents(array $fetchInfo): array
    {
        return Service::query()
            ->get()
            ->map(
                fn (Service $event) => EventData::make()
                    ->id(1)
                    ->title('teste')
                    ->start('2024-05-18T19:00:00')
                    ->end('2024-05-18T22:00:00')
                    ->url(
                        url: ServiceResource::getUrl(name: 'view', parameters: ['record' => $event]),
                        shouldOpenUrlInNewTab: true
                    )
            )
            ->all();
    }

    public function config(): array
    {
        return [
            'firstDay' => 1,
            'headerToolbar' => [
                'left' => 'dayGridWeek,dayGridDay',
                'center' => 'title',
                'right' => 'prev,next today',
            ],
        ];
    }
}
