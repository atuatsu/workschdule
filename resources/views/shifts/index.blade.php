@extends('layouts.app')
@section('content')
<h1>１週間のシフト</h1>
<div class="shifts">
    
    @foreach ($shifts as $shift)
        <div class="shift">
            <p class="date">{{ $shift->date }}</p>
            <p class="time">{{ $shift->start }}~{{ $shift->end }}</p>
        </div>
    @endforeach
</div>
<a href="/boards/create">[書き込む]</a>
@endsection

