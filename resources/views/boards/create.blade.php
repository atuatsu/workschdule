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
        <form action="/boards" method="POST">
            @csrf
            <div class="user">
                <p class="user">{{Auth::user()->name}}</p>
            </div>
            <div class="body">
                <h1>連絡事項</h1>
                <textarea name="board[body]"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
