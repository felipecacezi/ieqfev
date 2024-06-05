<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'service_schedule_json',
        'departament_id'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function departament()
    {
        return $this->hasOne(Department::class);
    }
}
