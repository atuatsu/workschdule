<?php
 
 use Carbon\Carbon;
 use APP\Shift;
     
$period = CarbonPeriod::create($start_date, $end_date);

// dd($date);
foreach ($period as $key => $date){
    $dates[] = $date->format('Y-m-d');
}

var_dump($dates);