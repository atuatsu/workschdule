<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public function getByWeek($start_date)
    {
        $start_date->modify('+1 day');
        dd($start_date);
    }
}
