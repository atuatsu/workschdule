<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WorkSchedule</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
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
                        <p class='body'><a href='/boards/{{ $board->id }}'>{{ $board->user->name }}</a> : {{ $board->body }} : {{ $board->updated_at }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="/boards/create">[書き込む]</a>
    </body>
</html>
