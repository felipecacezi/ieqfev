<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_date',
        'service_title',
        'service_observation'
    ];

    public function serviceSchedules()
    {
        return $this->hasMany(ServiceSchedule::class);
    }

    public function teste()
    {
        dd($this->find(1));
    }
}
