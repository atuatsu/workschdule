<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\format;
use Carbon\Carbon;

class ShiftController extends Controller
{
    public function index(Request $request, Shift $shift)
    {
        $date = $request['date'];
        if(!$date){
            $date = new Carbon();
        }
        return view('shifts/index')->with(['shifts' => $shift->getByWeek($date)]);
    }
    public function create(Request $request, Shift $shift)
    {
        $date = $request['date'];
        $numOfDays = 7;
        $dt = new Carbon($date);
        // $week[0] = $dt->isoFormat('Y-MM-DD (ddd)');
        for ($i=0; $i < $numOfDays; $i++){
            $week[$i] = $dt->copy()->addDay($i)->isoFormat('Y-MM-DD');;
        }
        return view('shifts/create')->with(['week' => $week]);

    }
    public function store(Request $request, Shift $shift)
    {
        $inputs = $request['shifts'];
        foreach($inputs as $input){
            $input['user_id'] = Auth::id();
            $shift = new Shift;
            $shift->fill($input)->save();
        }
       return redirect('/shifts');
    }
    public function select(Request $request)
    {
        return view('shifts/select');
    }
}
