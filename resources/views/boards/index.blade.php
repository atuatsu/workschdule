@extends('layouts.app')
@section('content')
<h1>ココス福重店</h1>
<div class='shifts'>
    <a herf="">[シフト提出]</a>
    <a herf="">[シフト一覧]</a>
</div>
<div class="boards">
    <h2>連絡事項</h2>
    <div class='boards'>
        @foreach ($boards as $board)
            <div class='contents'>
                <p class='body'>{{Auth::user()->name}}: <a href='/boards/{{ $board->id }}'>{{ $board->body }}</a> : {{ $board->updated_at }}</p>
            </div>
        @endforeach
    </div>
</div>
<a href="/boards/create">[書き込む]</a>
@endsection

