<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Shift extends Model
{
    public function getByWeek()
    {
        // $end_date=date("Y-m-d", strtotime((string)$today."7 day"));
        $start_date = new DateTime();
        $end_date = (new DateTime())->modify('+7 day');
        dd($today);
    }
}
