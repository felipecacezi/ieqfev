<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function listAll(Request $request)
    {
        try {
            $arServices = [];
            $services = Service::all()
                ->whereBetween('service_date', [$request->start, $request->end])
                ->toArray();

            foreach ($services as $keyService => $service) {
                $arServices[] = [
                    'id' => $service['id'],
                    'title' => $service['service_title'],
                    'start' => $service['service_date'],
                    'end' => $service['service_date'],
                    'description' => $service['service_observation']
                ];
            }

            return $arServices;

        } catch (\Exception $e) {
            throw new \Exception(
                $e->getMessage(),
                $e->getCode()
            );            
        }        
    }
}
