<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\DateHelper as HelperDate;
use Illuminate\Http\Request;
use App\Models\Service as ServiceModel;

class ServiceDetail extends Component
{

    public function render(Request $request)
    {
        $serviceId = $request->input('id') ?? null;
        if (!$serviceId) {
            abort(404, 'Culto não encontrado.');         
        }

        $arService = ServiceModel::find($serviceId)
            ->toArray();

        $arService['week_day'] = HelperDate::dayOfWeekPtBr($arService['service_date']);
        $arService['service_date'] = HelperDate::formatDatePtBr($arService['service_date']);
        $arService['rehearsal_date'] = HelperDate::subTime($arService['service_date']['hour'], 1);

        return view(
            'livewire.service-detail',
            [ 'details' => $arService ]
        );
    }
}
