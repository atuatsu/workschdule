<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use DateTime;

class ShiftController extends Controller
{
    public function index(Shift $shift)
    {
        $date = new DateTime('2017-08-21 16:44:44');
        return $shift->getByWeek($date);
    }
}
