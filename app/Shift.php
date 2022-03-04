<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use Illuminate\Support\Facades\DB;

class Shift extends Model
{
    public function getByWeek($date)
    {
        // $end_date=date("Y-m-d", strtotime((string)$today."7 day"));
        $start_date = (new DateTime($date))->modify('-1 day');
        $end_date = (new DateTime($date))->modify('+6 day');
        $shifts = DB::table('shifts')
                    ->whereBetween('date', [$start_date, $end_date])
                    ->get();
        return $shifts;
    }
    
    protected $fillable = [
        'start',
        'end',
        'date',
        'user_id',
        ];
}
