@extends('layouts.app')
@section('content')
<h1>シフト提出期間の始めの日付を選択</h1>
<form action="{{url('/shifts/create')}}" method="GET">
    <input type="date" class="date" name="date">
    <input type="submit" value="取得"/>
</form>
@endsection

