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
        <div class="boards">
            <h1 class='name'>{{ $board->user->name}}</h1>
            <p class='body'>{{ $board->body }}</p>
            <p class='updated_at'>{{ $board->updated_at }}</p>
        </div>
        <form action="/boards/{{ $board->id }}" id="form_{{ $board->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
    </body>
</html>
