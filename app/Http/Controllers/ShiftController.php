<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use DateTime;

class ShiftController extends Controller
{
    public function index(Shift $shift)
    {
        $date = new DateTime();
        return $shift->getByWeek($date);
        return view('shifts/index')->with(['shifts' => $shift->get()]);
    }
}
