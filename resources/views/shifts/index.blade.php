@extends('layouts.app')
@section('content')
<h1>１週間のシフト</h1>
<h1>シフト表示期間の始めの日付</h1>
<form action="{{url('/shifts')}}" method="GET">
    <input type="date" class="date" name="date">
    <input type="submit" value="取得"/>
</form>
<div class="container-fluid">
<div class="shifts row">
    @foreach ($shifts as $shift)
        <div class="shift col">
            <p class="date">{{ $shift->date }}</p>
            <p class="time">{{ $shift->start }}~{{ $shift->end }}</p>
        </div>
    @endforeach
</div>
</div>
@endsection

