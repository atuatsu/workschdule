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
        <form action="/shifts" method="POST">
            @csrf
            @foreach ($week as $key =>$date)
                <div class="shift">
                    <input type="date" class="date" name="shifts[{{ $key }}][date]" value="{{ $date }}" readon>
                    <input type="time" class="time" name="shifts[{{ $key }}][start]">
                    <input type="time" class="time" name="shifts[{{ $key }}][end]">
                </div>
            @endforeach
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
