<?php

namespace App\Helpers;

use DateTime;

class DateHelper
{
    public static function dayOfWeekPtBr(string $date):string
    {
        $week = [
            'Sunday' => 'Domingo', 
            'Monday' => 'Segunda-Feira',
            'Tuesday' => 'Terca-Feira',
            'Wednesday' => 'Quarta-Feira',
            'Thursday' => 'Quinta-Feira',
            'Friday' => 'Sexta-Feira',
            'Saturday' => 'Sábado'
        ];    
        return $week[date('l', strtotime($date))];
    }

    public static function formatDatePtBr(string $date):array
    {
        $date = new DateTime($date);
        $day = $date->format('d');
        $month = $date->format('m');
        $year = $date->format('Y');
        $hours = $date->format('H');
        $minutes = $date->format('i');
        $ampm = $date->format('A') == 'AM' ? 'Manhã': 'Noite';
        return [
            'date' => "{$day}/{$month}/{$year}",
            'hour' => "{$hours}:{$minutes}",
            'period' => "{$ampm}"
        ];
    }

    public static function subTime(string $time, int $number): string
    {
        $dateTime = new DateTime($time);
        $dateTime->modify("-{$number} hours");
        $hours = $dateTime->format('H');
        $minutes = $dateTime->format('i');
        return "{$hours}:{$minutes}";
    }
    
}
